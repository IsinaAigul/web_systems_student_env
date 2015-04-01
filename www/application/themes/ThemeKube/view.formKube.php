<?php
Class FormThemeKube extends AbstractView
{

    private $form = null;

    public function __construct($form)
    {
        $this->form = $form;
    }

    private  function getFields()
    {
        $fields = "";
        foreach($this->form->getFormFields() as $field)
        {
            $fields .= $field->render();
        }

        return $fields;
    }


    public function render()
    {
        $dwoo = new Dwoo_Core();

        // Create some data
        $data = array('addition'=>$action = $this->form->action(), 'division'=> $name = $this->form->method(), 'header' => $header = $this->form->label(), "fields" => $fields = $this->getFields());

        // Output the result ...
        return $dwoo->get('application/themes/ThemeKube/form.tpl', $data);
    }
}
/**
 * Created by PhpStorm.
 * User: Айгуль
 * Date: 26.02.2015
 * Time: 16:30
 */