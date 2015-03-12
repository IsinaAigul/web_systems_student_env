<?php

class ThemeCascade{

    private $views= Array(
      "TextField" => "TextFieldThemeCascade",
        "PasswordField"=> "PasswordFieldThemeCascade",
        "ButtonField" => "ButtonFieldThemeCascade",
        "HiddenField" => "HiddenFieldThemeCascade",
        "Form" => "FormThemeCascade"

    );

    public function getView($view){
        if(isset($this->views[$view])){
            return $this->views[$view];
        }
        else{
            return null;
        }
    }

}