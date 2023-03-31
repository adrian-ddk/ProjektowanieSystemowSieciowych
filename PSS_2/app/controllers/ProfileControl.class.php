<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;

class ProfileControl
{
    public $id;
    public $userData;
    public $addedOpinions;

    public function getUserFromDb($id){
        $user = null;

        try{
            $user = App::getDB()->get("user", [
                "[>]role" => ["id_role" => "id_role"],
                "[>]user_details" => ["id" => "id_details"]
            ],[
                'user.id',
                'user.login',
                'user.email',
                'user.id_role',
                'role.name',
                'user_details.last_login',
                'user_details.register_date'
            ],[
                'user.id' => $id
            ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        return $user;
    }

    public function getAddedOpinions($id){
        $records = null;

        try{
            $records = App::getDB()->select("opinion",[
                'opinion.id',
                'opinion.name',
                'opinion.description',
            ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
        return $records;
    }

    public function generateView(){
        $this->userData = $this->getUserFromDb($this->id);
        $this->addedOpinions = $this->getAddedOpinions($this->id);
        App::getSmarty()->assign("profile", $this->userData);
        App::getSmarty()->assign("opinions", $this->addedOpinions);
        App::getSmarty()->assign("page_title", "Profil użytkownika: " .$this->userData['login']);
        App::getSmarty()->display("ProfileView.tpl");
    }

    public function validate(){
        $v = new Validator();
        $v->validate($this->id,[
            'numeric' => true,
            'int' => true,
            'validator_message' => 'Nieprawidłowy parametr!',
        ]);

        $isExist = App::getDB()->count("user", "id", [
            'id' => $this->id
        ]);

        if($isExist != 1){
            Utils::addErrorMessage("Użytkownik o podanym id nie istnieje!");
        }

        if(App::getMessages()->isError()) return false;
        else return true;
    }

    public function action_profile(){
        $this->id = ParamUtils::getFromCleanURL(1);
        if(empty($this->id) || $this->id < 0) $this->id = SessionUtils::loadData("id", true);

        if(!$this->validate()){
            $this->id = SessionUtils::loadData("id", true);
        }

        $this->generateView();

    }
}