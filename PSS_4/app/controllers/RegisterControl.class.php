<?php

namespace app\controllers;

use app\forms\RegisterForm;
use core\Logs;
use core\SessionUtils;
use core\ParamUtils;
use core\App;
use core\Utils;
use core\Validator;

/**
 * Class RegisterControl
 * @package app\controllers
 */
class RegisterControl
{
    /**
     * @var RegisterForm
     */
    public $form;

    /**
     * RegisterControl constructor.
     */
    public function __construct(){
        $this->form = new RegisterForm();
    }

    /**
     *
     */
    public function getFormParams(){
        $this->form->email = ParamUtils::getFromRequest("email");
        $this->form->login = ParamUtils::getFromRequest("login");
        $this->form->password = ParamUtils::getFromRequest("password");
        $this->form->password_repeat = ParamUtils::getFromRequest("password_repeat");
    }

    /**
     * @return bool
     */
    public function validateForm(){
        if(!empty(SessionUtils::load("id", true))) return true;

        if(!$this->form->checkIsNull()) return false;

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

        $v->validate($this->form->password_repeat,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane'
        ]);

        if($this->form->password_repeat != $this->form->password){
            Utils::addErrorMessage("Hasła nie są identyczne!");
        }

        $this->checkForDuplicate();

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    /**
     *
     */
    public function checkForDuplicate(){
        try{
            $loginCount = App::getDB()->has("user", [
                'login' => $this->form->login
            ]);

            $emailCount = App::getDB()->has("user",[
                'email' => $this->form->email
            ]);

            if($loginCount){
                Utils::addErrorMessage("Podany login jest już zajęty");
            }

            if($emailCount){
                Utils::addErrorMessage("Podany email jest już zajęty");
            }

        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }

    /**
     *
     */
    public function insertToDb(){
        try{
            $userRole_id = App::getDB()->get("role", "id_role",[
                'name' => 'user'
            ]);

            App::getDB()->insert("user_details",[
                'register_date' => (new \DateTime())->format('Y-m-d H:i:s')
            ]);

            $userId = App::getDB()->id();

            App::getDB()->insert("user",[
                'id' => $userId,
                'login' => $this->form->login,
                'password' => md5($this->form->password),
                'email' => $this->form->email,
                'id_role' => $userRole_id
            ]);

            Utils::addInfoMessage("Konto zostało utworzone");
            Logs::addLog("Utworzenie nowego konta: ".$this->form->login);
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }
    }

    /**
     * @throws \SmartyException
     */
    public function generateView(){
        if($this->validateForm()){
            $this->insertToDb();
            header("Location: ".App::getConf()->app_url."/login");
        }
        else{
            App::getSmarty()->assign('page_title','Rejestracja');
            App::getSmarty()->assign('page_description','Rejestracja');
            App::getSmarty()->display('RegisterView.tpl');
        }
    }

    public function action_ajax() {
        $email = $_POST["email"];
        $result = App::getDB()->select("user", "*", [
            "email" => $email]);

        $result = count($result);
        if ($result == 0) {
            echo json_encode([
                "response" => "Adres email jest dostępny."
            ]);
        } else {
            echo json_encode([
                "response" => "Adres email jest niedostępny."
            ]);
        } exit;
    }

    /**
     * @throws \SmartyException
     */
    public function action_register(){
        $this->getFormParams();
        $this->generateView();
    }
}