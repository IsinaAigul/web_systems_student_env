<?php

class RegistrationForm extends Form{
    protected function createForm(){//построение формы
        
        $this->method("POST");//инициализация атрибутов формы
        $this->action("/login");
        $this->label("Регистрация");
        $index_text = "text_login";
        $this->fields[$index_text] = new TextField("Логин",$index_text,true);
        $index_text = "text_mail";
        $this->fields[$index_text] = new TextField("e-mail",$index_text, true);//инициализация класса поля пароля
        $index_password = "password";
        $this->fields[$index_password] = new PasswordRegField ("введите пароль",$index_password, true);
        $index_password = "confirm_password";
        $this->fields[$index_password] = new PasswordRegField ("повторите пароль",$index_password, true);
        $index_button = "submit";
        $this->fields[$index_button] = new ButtonField("Нажмите, чтобы зарегистрироваться",$index_button, false, "Войти");//инициализация класса поля кнопки
      }
    protected function customSubmitForm(){//"провивка" логина и пароля по БД и redirect в случае совпадения
        print("Это победа!");
    }
    protected function validateCustomForm(){//проверка формы
        return array();
    }
}