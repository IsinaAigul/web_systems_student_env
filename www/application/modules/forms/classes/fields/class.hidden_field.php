<?php
Class HiddenField extends Field{//невидимое поле
    public function __construct($new_name, $new_req_marker,$new_value){
        //инициализация поля
        $this->name($new_name);
        $this->required($new_req_marker);
        $this->rawValue($new_value);
    }
    function customValidate(){
        return null;
    }
    public function render(){//вернуть строковое представление текстового поля
        $view = ThemeManager::getView("HiddenField");
        $drawer = new $view($this);
        return $drawer->render();
    }
}