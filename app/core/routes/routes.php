<?php

// set routes
    router::set_route('/', function(){

        index_controller::create_view('index');

    });

    router::set_route('/about', function(){

        about_controller::create_view('about');

    });

    router::set_route('/projects', function(){

        projects_controller::create_view('projects');

    });

    router::set_route('/contact', function(){

        contact_controller::create_view('contact');

    });

?>