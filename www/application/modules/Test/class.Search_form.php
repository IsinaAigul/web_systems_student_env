<?php

class SearchTour extends Form{
    protected function createForm(){//построение формы
        
        $this->method("POST");//инициализация атрибутов формы
        $this->action("/login");
        $this->label("поиск");
        $index_select = "select_country";
        $this->fields[$index_select] = new SelectField("Страна", $index_select, true);
        $index_select = "select_resort";
        $this->fields[$index_select] = new SelectField("Курорт", $index_select, true);
        $index_select = "select_type";
        $this->fields[$index_select] = new SelectField("Тип", $index_select, true);
        $index_select = "select_from";
        $this->fields[$index_select] = new SelectField("От", $index_select, true);
        $index_select = "select_to";
        $this->fields[$index_select] = new SelectField("До", $index_select, true);
        $index_button = "submit";
        $this->fields[$index_button] = new ButtonField("Поиск",$index_button, false, "Войти");//инициализация класса поля кнопки
      }
    protected function customSubmitForm(){//"провивка" логина и пароля по БД и redirect в случае совпадения
        print("Это победа!");
    }
    protected function validateCustomForm(){//проверка формы
        return array();
    }
}