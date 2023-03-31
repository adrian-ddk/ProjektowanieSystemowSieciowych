<?php

namespace app\controllers;

use core\App;
use core\Logs;
use core\ParamUtils;
use core\Utils;
use core\SessionUtils;

class OpinionManagerControl
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

    public function deleteOpinion($id){
        try{
            $result = App::getDB()->has("opinion",[
                'id' => $id
            ]);

            if($result){
                App::getDB()->delete("opinion",[
                    'id' => $id
                ]);

                App::getDB()->delete("opinion",[
                    'id_opinion' => $id
                ]);

                Utils::addInfoMessage("Opinia (".$id.") została usunięta");
                $admin_login = SessionUtils::load("login", true);
                Logs::addLog("Opinia (".$id.") została usunięta przez ".$admin_login);
            }
            else{
                Utils::addErrorMessage("Opinia nie istnieje");
            }
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        return false;
    }

    public function action_manageOpinions(){
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
        App::getSmarty()->assign("page_title", "Zarządzanie opiniami");
        App::getSmarty()->display("ManageOpinionsView.tpl");
    }
}