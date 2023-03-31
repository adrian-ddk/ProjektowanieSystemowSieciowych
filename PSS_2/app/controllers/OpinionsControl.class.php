<?php

namespace app\controllers;

use core\App;
use core\Logs;
use core\ParamUtils;
use core\Utils;
use core\SessionUtils;

class OpinionsControl
{
    public $opinions;
    public $offset;

    public function getOpinionsFromDB(){
        try{
            $this->opinions = App::getDB()->select("opinion",[
                "[>]user" => ["opinion.author" => "id"]
            ],[
                'opinion.id',
                'opinion.name',
                'opinion.description',
                'opinion.added_time',
                'opinion.author',
                'user.login',
                'user.id(userid)',
            ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!".$e->getMessage());
        }
    }

    public function action_opinions(){
        $option = ParamUtils::getFromCleanURL(2);
        $opinion_id = ParamUtils::getFromCleanURL(3);

        switch ($option){
            case "delete" :
                $this->deleteOpinion($opinion_id);
                break;
        }
        $offset = ParamUtils::getFromCleanURL(1);
        $this->generateView();
    }

    public function generateView(){
        $this->getOpinionsFromDB();
        App::getSmarty()->assign("opinions", $this->opinions);
        App::getSmarty()->assign("offset", $this->offset);
        App::getSmarty()->assign("page_title", "Opinie użytkowników");
        App::getSmarty()->display("UserOpinionView.tpl");
    }
}