<?php
Class HiddenFieldThemeCascade extends AbstractView{

    private $field = null;

    public function __construct($field){
        $this->field = $field;
    }

    public function render(){
        $dwoo = new Dwoo_Core();

        // Create some data
        $data = array('addition'=>$label = $this->field->label(), 'division'=> $name = $this->field->name());

        // Output the result ...
        return $dwoo->get('application/themes/ThemeCascade/hidden.tpl', $data);
    }
}


