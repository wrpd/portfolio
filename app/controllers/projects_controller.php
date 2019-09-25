<?php
    class projects_controller extends controller {

        public static function view_project($project){

            require_once("./app/views/projects/$project.php");
       }
    }
?>