<?php
Class FormThemeCascade extends AbstractView
{

    private $form = null;

    public function __construct($form)
    {
        $this->form = $form;
    }

    public function render()
    {
        $label = $this->form->label();
        $method = $this->form->method();
        $action = $this->form->action();
        $form = "<h1>$label</h1><form method='$method' action='$action'>";
        foreach ($this->form->getFormFields() as $field) {
            $form .= $field->render();
        }
        return $form . "</form>";
    }
}
/**
 * Created by PhpStorm.
 * User: Айгуль
 * Date: 26.02.2015
 * Time: 16:22
 */