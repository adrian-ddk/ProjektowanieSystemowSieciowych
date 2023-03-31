<?php

namespace app\controllers;

use core\App;
use core\Logs;
use core\ParamUtils;
use core\Utils;
use core\SessionUtils;

/**
 * Class UserManagerControl
 * @package app\controllers
 */
class UserManagerControl
{
    /**
     * @var
     */
    public $users;
    public $user;
    public $roles;
    public $offset;

    /**
     *
     */
    public function getUsersFromDB(){
        try{
            $this->users = App::getDB()->select("user", [
                "[>]role" => ["id_role" => "id_role"],
            ],[
                'user.id',
                'user.login',
                'user.password',
                'user.email',
                'user.id_role',
                'role.name',
            ]);

            $this->roles = App::getDB()->select("role", "*");
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    public function getUserFromDB($id){
        try{
            $this->user = App::getDB()->get("user", [
                "[>]role" => ["id_role" => "id_role"],
                "[>]user_details" => ["id" => "id_details"]
            ],[
                'user.id',
                'user.login',
                'user.password',
                'user.email',
                'user.id_role',
                'role.name',
            ],[
                'user.id' => $id
            ]);

        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    /**
     * @throws \SmartyException
     */
    public function generateView(){
        $this->getUsersFromDB();
        App::getSmarty()->assign("roles", $this->roles);
        App::getSmarty()->assign("users", $this->users);
        App::getSmarty()->assign("offset", $this->offset);
        App::getSmarty()->assign("page_title", "Zarządzanie użytkownikami");
        App::getSmarty()->display("ManageUsersView.tpl");
    }

    /**
     * @throws \SmartyException
     */
    public function action_manageUsers(){
        $option = ParamUtils::getFromCleanURL(2);
        $user_id = ParamUtils::getFromCleanURL(3);

        switch ($option){
            case "edit" :
                $this->getUserFromDB($user_id);
                App::getSmarty()->assign("edit", true);
                App::getSmarty()->assign("userDetails", $this->user);
                break;
        }
        $this->generateView();
    }
}