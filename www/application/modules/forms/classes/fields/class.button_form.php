<?php
Class ButtonField extends Field{//кнопка
    function customValidate(){
        return null;
    }
    public function render(){//вернуть текстовое представление формы
        $view = ThemeManager::getView("ButtonField");
        $drawer = new $view($this);
        return $drawer->render();
    }
}