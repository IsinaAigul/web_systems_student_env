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
        $label = $this->label();
      $name = $this->name();
      $value = $this ->value();
      $required = $this->required();
        $view = "<br>$label<br><input value='$value' name='$name' required='$required'>";//сформировать текстовое представление полей
         return $view;
    }
}