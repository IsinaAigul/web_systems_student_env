<?php
Class LoginField extends Field{//текстовое поле для логина
    function customValidate(){
        return null;
    }
    public function render(){//вернуть строковое представление текстового поля
        $view = ThemeManager::getView("TextField");
        $drawer = new $view($this);
        return $drawer->render();
    }
}