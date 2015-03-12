<?php

Class ThemeManager{

    static private $active_theme = null;

    static public function setTheme($theme){//установка темы
        self::$active_theme = $theme;
    }

    static public function getView($view){//получить view по астивной теме
        return self::$active_theme->getView($view);
    }


}