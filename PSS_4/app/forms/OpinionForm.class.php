<?php

namespace app\forms;

class OpinionForm
{
    public $name;
    public $description;

    function checkIsNull() {
        foreach ($this as $key => $value) {
            if(!isset($value)) return false;
            else return true;
        }
    }
}