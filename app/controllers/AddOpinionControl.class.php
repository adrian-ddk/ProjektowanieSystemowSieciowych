<?php

namespace app\controllers;

use app\forms\OpinionForm;
use core\App;
use core\ParamUtils;
use core\RoleUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;


/**
 * Class AddOpinionControl
 * @package app\controllers
 */

class AddOpinionControl
{
    /**
     * @var OpinionForm
     */
    public $form;
    public $newAddedId;
    /**
     * AddOpinionControl constructor.
     */
    public function __construct()
    {
        $this->form = new OpinionForm();
    }

    /**
     *
     */
    public function getParams(){
        $this->form->name = ParamUtils::getFromPost('name');
        $this->form->description = ParamUtils::getFromPost('description');
    }

    /**
     * @return bool
     */
    public function validateOpinion(){
        if(!$this->form->checkIsNull()) return false;

        if(RoleUtils::inRole("zbanowany")) Utils::addErrorMessage("Zbanowani użytkownicy nie mogą dodawać nowych opinii!");

        $v = new Validator();
        $v->validate($this->form->name,[
            'trim' => true,
            'required' => true,
            'min_length' => 3,
            'max_length' => 20,
            'required_message' => 'Imie jest wymagane',
            'validator_message' => "Imie powinna składać się od 3 do 20 znaków!"
        ]);

        $v->validate($this->form->description,[
            'max_length' => 127,
            'validator_message' => "Podany opis jest zbyt długi!"
        ]);

        $this->checkForDuplicates();

        if(!App::getMessages()->isError()) return true;
        else return false;
    }

    public function checkForDuplicates(){
        try{
            $record = App::getDB()->has('opinion',[
                'AND'=>[
                    'name' => $this->form->name,
                    'description' => $this->form->description,
                ]
            ]);

        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }

    /**
     *
     */
    public function insertToDB(){
        try{
            App::getDB()->insert('opinion',[
                'id' => null,
                'name' => $this->form->name,
                'description' => $this->form->description,
                'author' => SessionUtils::load('id', true)
            ]);
            $this->newAddedId = App::getDB()->id();
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
    }

    /**
     * @throws \SmartyException
     */
    public function generateView(){
        if($this->validateOpinion()){
            $this->insertToDB();
            Utils::addInfoMessage("Pomyślnie dodano nową opinie!");
            header("Location: ".App::getConf()->app_url."/addOpinion/".$this->newAddedId);
        }
        else{
            App::getSmarty()->assign("title", "Dodaj nową opinie");
            App::getSmarty()->assign("form", $this->form);
            App::getSmarty()->assign("page_title", "Dodaj nową opinie");
            App::getSmarty()->display("AddOpinionView.tpl");
        }
    }

    /**
     * @throws \SmartyException
     */
    public function action_addOpinion(){
        $this->getParams();
        $this->generateView();
    }
}