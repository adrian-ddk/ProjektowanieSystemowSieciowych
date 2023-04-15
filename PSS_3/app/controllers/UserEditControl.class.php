<?php

namespace app\controllers;

use app\forms\UserEditForm;
use core\App;
use core\Logs;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;

/**
 * Class UserEditControl
 * @package app\controllers
 */
class UserEditControl
{
    /**
     * @var UserEditForm
     */
    public $form;
    /**
     * @var
     */
    public $user;

    /**
     * UserEditControl constructor.
     */
    public function __construct()
    {
        $this->form = new UserEditForm();
    }

    /**
     *
     */
    public function getParams(){
        $this->form->id = ParamUtils::getFromPost('id');
        $this->form->login = ParamUtils::getFromPost('login');
        $this->form->password = ParamUtils::getFromPost('password');
        $this->form->email = ParamUtils::getFromPost('email');
        $this->form->id_role = ParamUtils::getFromPost('id_role');
    }

    /**
     *
     */
    public function getCurrentUserData(){
        try{
            $this->user = App::getDB()->get("user","*",[
                'id' => $this->form->id
            ]);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    /**
     * @return bool
     */
    public function validateForm(){
        $v = new Validator();
        $v->validate($this->form->email,[
            'email' => true,
            'trim' => true,
            'required' => true,
            'min_length' => 4,
            'max_length' => 128,
            'required_message' => 'Adres email jest wymagany',
            'validator_message' => "Nieprawidłowy adres email"
        ]);

        $v->validate($this->form->login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 3,
            'max_length' => 32,
            'validator_message' => 'Login powinien zawierać od 3 do 32 znaków'
        ]);

        $v->validate($this->form->password,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'regexp' => "/(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}/",
            'validator_message' => 'Hasło powinno mieć conajmniej 5 znaków, jedną literę i jedną liczbę'
        ]);

        $this->checkForDuplicates();
        $this->checkIsForbidden();

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    /**
     *
     */
    public function checkForDuplicates(){
        try{
            $isLoginExist = App::getDB()->has('user',[
                'login' => $this->form->login,
                'id[!]' => $this->form->id
            ]);

            if($isLoginExist) Utils::addErrorMessage("Podany login występuje już u innego użytkownika");

            $isMailExist = App::getDB()->has('user',[
                'email' => $this->form->email,
                'id[!]' => $this->form->id
            ]);

            if($isMailExist) Utils::addErrorMessage("Podany login występuje już u innego użytkownika");
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    public function checkIsForbidden(){
        if(SessionUtils::load('role', true) == 'moderator'){
            if($this->user['id_role'] <= 2){
                Utils::addErrorMessage("Moderator nie może edytować kont innych niż użytkownik i zbanowany!");
            }

            if($this->form->id_role <= 2){
                Utils::addErrorMessage("Moderator nie może nadawać uprawnień administratora ani moderatora!");
            }
        }
    }

    /**
     *
     */
    public function updateUser(){
        //Szyfrowanie haseł, jeśli zmieniły się.
        if($this->form->password != $this->user['password']) $this->form->password = md5($this->form->password);

        try{
            App::getDB()->update('user',[
                'login' => $this->form->login,
                'password' => $this->form->password,
                'email' => $this->form->email,
                'id_role' => $this->form->id_role,
            ],[
                'id' => $this->form->id
            ]);

            App::getDB()->update('user_details',[
                'id_details' => $this->form->id
            ]);

            Utils::addInfoMessage("Pomyślnie zmieniono dane użytkownika");
            $login = SessionUtils::load('login', true);
            $role = SessionUtils::load('role', true);
            Logs::addLog("Edycja użytkownika ".$this->form->id." przez ".$role.": ".$login );
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    /**
     *
     */
    public function generateView(){
        if($this->validateForm()) {
            $this->updateUser();
        }
        header("Location: ".App::getConf()->app_url."/manageUsers/0/edit/".$this->form->id);
    }

    /**
     *
     */
    public function action_userEdit(){
        $this->getParams();
        $this->getCurrentUserData();
        $this->generateView();
    }

}