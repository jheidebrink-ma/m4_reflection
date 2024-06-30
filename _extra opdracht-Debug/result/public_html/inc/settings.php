<?php
setlocale(LC_TIME, "nl_NL");
date_default_timezone_set('Europe/Amsterdam');


// maak een verbinding met mysql en selecteer een database
switch ($_SERVER['HTTP_HOST']) {
    case 'cmm_lessen.dragonet.dev' :
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_DATABASE', 'cmm_news');
        define('DB_HOST', 'localhost');
        ini_set('display_errors', 1);
        define('SITE_PATH', 'http://cmm_lessen.dragonet.dev/lessen/dag7/practice/');
        define('DEBUG', false);
        break;
    case 'cmm-lessen.localhost' :
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_DATABASE', 'cmm_wd315_news');
        define('DB_HOST', '127.0.0.1');
        ini_set('display_errors', 1);
        define('SITE_PATH', 'http://cmm-lessen.localhost/WebDeveloper/Homework/15-Debug/result/public_html/');
        define('DEBUG', false);
        break;

    case 'news' :
        define('DB_USERNAMEE', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_DATABASE', 'cmm_2016');
        define('DB_HOST', 'localhost');
        define('SITE_PATH', 'http://news/');
        define('SITE_NAME', 'Nieuwsberichten systeem');
        define('DEBUG', true);
        break;

}	
