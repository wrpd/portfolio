<?php

// autoload classes

    function autoload($class_name){
        
        if (file_exists('./app/core/classes/'. $class_name . '.php')){

            include './app/core/classes/'. $class_name . '.php';

        } else if (file_exists('./app/controllers/' . $class_name . '.php')){

            include './app/controllers/' . $class_name . '.php';

        } else if (file_exists('./app/models/' . $class_name . '.php')){

            include './app/models/' . $class_name . '.php';

        }
    }

    spl_autoload_register(autoload);

// load routes

    require_once './app/core/routes/routes.php';
?>