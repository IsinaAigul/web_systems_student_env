<?php

class ChangeTour extends Form{
    protected function createForm(){//построение формы
        
        $this->method("POST");//инициализация атрибутов формы
        $this->action("/login");
        $this->label("Редактирование Тура");
        $index_text = "text_name";//инициализировать поля формы
        $this->fields[$index_text] = new TextField("название тура",$index_text,true);//инициализация класса поля логина
        $index_text = "text_description";
        $this->fields[$index_text] = new TextField("Описание",$index_text, true);//инициализация класса поля пароля
        $index_select = "select_country";
        $this->fields[$index_select] = new SelectField("Страна", $index_select, true);
        $index_select = "select_resort";
        $this->fields[$index_select] = new SelectField("Курорт", $index_select, true);
        $index_select = "select_type";
        $this->fields[$index_select] = new SelectField("Тип", $index_select, true, "спорт", "ьилвь", "nvkdf");
        $index_button = "submit";
        $this->fields[$index_button] = new ButtonField("Нажмите, чтобы авторизоваться",$index_button, false, "Войти");//инициализация класса поля кнопки
      }
    protected function customSubmitForm(){//"провивка" логина и пароля по БД и redirect в случае совпадения
        print("Это победа!");
    }
    protected function validateCustomForm(){//проверка формы
        return array();
    }
}