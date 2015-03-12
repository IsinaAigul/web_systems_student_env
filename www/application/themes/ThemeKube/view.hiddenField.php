<?php
Class HiddenFieldThemeKube extends AbstractView{

    private $field = null;

    public function __construct($field){
        $this->field = $field;
    }

    public function render(){
        $label = $this->field->label();
        $name = $this->field->name();
        $value = $this ->field->value();
        return "<br><font color='lime'>$label</font><br><input type='hidden' value='$value' name='$name'>";
    }
}