<?php

namespace app\controllers;

use core\App;
use core\Utils;

class PanelControl
{
    public $lastRegister;
    public $allOpinions;
    public $allUsers;

    public function getLastRegister(){
        $records = null;
        try{
            $records = App::getDB()->select("user", [
                "[>]user_details" => ["id" => "id_details"]
            ],[
                'user.id',
                'user.login',
                'user_details.register_date'
            ],[
                "ORDER" => [
                    'user_details.register_date' => "DESC",
                ],
                'LIMIT' => 5
            ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $records;
    }

    public function getAmountOfUsers(){
        $count = 0;
        try{
            $count = App::getDB()->count("user", "id");
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $count;
    }

    public function getAmountOfOpinions(){
        $count = 0;
        try{
            $count = App::getDB()->count("opinion", "id");
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $count;
    }

    public function action_panel(){
        $this->lastRegister = $this->getLastRegister();
        $this->allOpinions = $this->getAmountOfOpinions();
        $this->allUsers = $this->getAmountOfUsers();
        $this->generateView();
    }

    public function generateView(){
        App::getSmarty()->assign('lastRegister', $this->lastRegister);
        App::getSmarty()->assign('allOpinions', $this->allOpinions);
        App::getSmarty()->assign('allUsers', $this->allUsers);
        App::getSmarty()->assign('page_title', "Panel główny");
        App::getSmarty()->display("PanelView.tpl");
    }
}