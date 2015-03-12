<?php

class ThemeKube{

    private $views= Array(
      "TextField" => "TextFieldThemeKube",
        "PasswordField" => "PasswordFieldThemeKube",
        "ButtonField" => "ButtonFieldThemeKude",
        "HiddenField" => "HiddenFieldThemeKube",
        "Form" => "FormThemeKube"

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