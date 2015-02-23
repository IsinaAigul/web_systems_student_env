<?php
Class LoginField extends Field{//текстовое поле для логина
    function customValidate(){
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