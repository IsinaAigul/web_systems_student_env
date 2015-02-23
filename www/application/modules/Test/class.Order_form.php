<?php

class OrderTour extends Form{
    protected function createForm(){//построение формы
        
        $this->method("POST");//инициализация атрибутов формы
        $this->action("/login");
        $this->label("Оформление заказа");
        $index_text = "text_name";
        $this->fields[$index_text] = new TextField("имя",$index_text,true);
        $index_text = "text_patronimic";
        $this->fields[$index_text] = new TextField("отчество",$index_text,true);
        $index_text = "text_surname";
        $this->fields[$index_text] = new TextField("фамилия",$index_text,true);
        $index_passport = "passport_data";
        $this->fields[$index_passport] = new PassportField("паспортные данные", $index_passport,true);
        $index_text = "text_give";
        $this->fields[$index_text] = new TextField("выдан",$index_text, true);//инициализация класса поля пароля
        $index_button = "submit_add";
        $this->fields[$index_button] = new ButtonField("добавить туриста",$index_button, false);
        $index_button = "submit_order";
        $this->fields[$index_button] = new ButtonField("оформить заказ",$index_button, false);
        
    }
    protected function customSubmitForm(){//"провивка" логина и пароля по БД и redirect в случае совпадения
        print("Это победа!");
    }
    protected function validateCustomForm(){//проверка формы
        return array();
    }
}