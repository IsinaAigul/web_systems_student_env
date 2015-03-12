<?php

Class TextFieldThemeCascade extends AbstractView{

    private $field = null;

    public function __construct($field){
        $this->field = $field;
    }

    public function render(){
        $label = $this->field->label();
        $name = $this->field->name();
        $value = $this ->field->value();
        return "<br><font color='navy'>$label</font><br><input type='text' value='$value' name='$name'>";
    }

}