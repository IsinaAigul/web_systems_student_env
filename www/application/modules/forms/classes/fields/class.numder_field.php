<?php
Class NumberField extends Field{//текстовое поле для обработки номеров телефонов
    function customValidate(){
        $testValue = $this->value();
        $error_module = new Errors();
        if(preg_match_all('/([^\d])/',$testValue)){
            return $error_module->incorrectFillError();
        }
        $this->value($testValue);//записать проверенное занчение
        return null;
    }
    public function render(){//вернуть строковое представление текстового поля
        $view = ThemeManager::getView("TextField");
        $drawer = new $view($this);
        return $drawer->render();
    }
}