<?php


    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

    //defined('DS') ? null : define('SITE_ROOT', DS . 'Aplications' . DS . 'XAMPP' . DS . xamppfiles . DS . 'htdocs' . DS . 'galerry' );
    defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'gallery');

    //defined('INCLUDES_PATH') ? NULL : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes' );
    defined('TMP_PATH')  ? null : define('TMP_PATH', 'C:'.DS.'xampp'.DS.'tmp');

    // defined('INCLUDES_PATH')  ? null : define('INCLUDES_PATH', 'C:'.DS.'xampp'.DS. 'htdocs' . DS . 'admin' . DS . 'includes');
    // defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');
    // defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT.DS.'admin'.DS.'images');


    require_once("functions.php");
    require_once("new_config.php");
    require_once("database.php");
    require_once("db_object.php");
    require_once("user.php");
    require_once("photo.php");
    //require_once("comment.php");
    require_once("session.php");
    require_once("paginate.php");











?>