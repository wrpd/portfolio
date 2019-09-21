<?php
    class router {
        
        public static $valid_routes = array();

        public static function set_route($route, $function){

            self::$valid_routes[] = $route;

            if ($_SERVER['REQUEST_URI'] == $route){

                $function->__invoke();
                
            }
        }
    }
?>