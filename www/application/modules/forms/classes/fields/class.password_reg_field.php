<?php
Class PasswordRegField extends Field{
      function customValidate(){
        $testValue = $this->value();//вернуть тестовое значение
        $error_module = new Errors();//инициализировать коллекцию ошибок
        if($testValue) {
            if ($testValue['main'] != $testValue['repeat']) {//проверка на совпадение пароля и его повтора
                return $error_module->incorrectFillError();
            }
        }
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