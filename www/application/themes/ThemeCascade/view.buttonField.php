<?php
Class ButtonFieldThemeCascade extends AbstractView{

    private $field = null;

    public function __construct($field){
        $this->field = $field;
    }

    public function render(){
        $label = $this->field->label();
        $name = $this->field->name();
        $value = $this ->field->value();
        return "<br><font color='navy'>$label</font><br><input type='submit' value='$value' name='$name'>";
    }
}
/**
 * Created by PhpStorm.
 * User: Айгуль
 * Date: 26.02.2015
 * Time: 16:15
 */