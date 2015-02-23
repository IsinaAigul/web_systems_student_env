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
      $label = $this->label();
      $name = $this->name();
      $value = $this ->value();
      $required = $this->required();
        $view = "<br>$label<br><input value='$value' name='$name' required='$required'>";
        return $view;
    }
}