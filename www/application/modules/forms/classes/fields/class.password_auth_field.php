<?php
Class PasswordAuthField extends Field{
    function customValidate(){
        return null;
    }
    public function render(){//вернуть строковое представление текстового поля
        $view = ThemeManager::getView("PasswordField");
        $drawer = new $view($this);
        return $drawer->render();
    }
}