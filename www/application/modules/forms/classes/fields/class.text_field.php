<?php
Class TextField extends Field{//текстовое поле для ФИО
    function customValidate(){
        $testValue = $this->value();//вернуть тестовое значение
        $error_module = new Errors();
        if(preg_match_all('/([^A-я]+)/',$testValue)){
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
        $view = "<br>$label<br><input value='$value' name='$name' required='$required'>";
        return $view;
    }
}
