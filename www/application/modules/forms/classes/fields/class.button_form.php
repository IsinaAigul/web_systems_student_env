<?php
Class ButtonField extends Field{//кнопка
    function customValidate(){
        return null;
    }
    public function render(){//вернуть текстовое представление формы
        $label = $this->label();
        $name = $this->name();
        $required = $this->required();
        $view = "<br>$label<br><input type='submit' name='$name' required='$required'>";//необходиио добавить новый шаблон для кнопки
        return $view;
    }
}