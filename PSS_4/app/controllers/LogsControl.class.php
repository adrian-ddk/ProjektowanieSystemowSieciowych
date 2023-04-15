<?php

namespace app\controllers;

use core\ParamUtils;
use core\App;
use core\Utils;

/**
 * Class LogsControl
 * @package app\controllers
 */
class LogsControl
{
    /**
     * @var
     */
    public $logs;
    public $offset = 0;
    public $records = 100;

    /**
     *
     */
    public function getLogsFromDb(){
        try{
            $this->logs = App::getDB()->select("action_log", "*",[
                "ORDER" => [
                    "id_log" => "DESC",
                ],
                'LIMIT' => [($this->offset * $this->records), $this->records]
            ]);
        }catch (\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    /**
     * @throws \SmartyException
     */
    public function generateView(){
        $this->getLogsFromDB();
        App::getSmarty()->assign("offset", $this->offset);
        App::getSmarty()->assign("next_page", $this->offset + 1);
        App::getSmarty()->assign("previous_page", $this->offset - 1);
        App::getSmarty()->assign("logs", $this->logs);
        App::getSmarty()->assign("page_title", "Logi administracyjne");
        App::getSmarty()->display("LogsView.tpl");
    }

    /**
     * @throws \SmartyException
     */
    public function action_adminLogs(){
        $offset = ParamUtils::getFromCleanURL(1);
        if(isset($offset) && is_numeric($offset) && $offset >= 0) $this->offset += $offset;
        if($offset == -1) $this->records = App::getDB()->count("action_log","*");
        $this->generateView();
    }
}