<?php

    require_once('config/server_config.php');
    require_once('config/config.php');
    require_once('redirect.php');

    spl_autoload_register(function($nombreClase){
        if (file_exists('clases/'.$nombreClase.'.php')){
            require_once('clases/'.$nombreClase.'.php');
        }
    });

    spl_autoload_register(function($nombreModelo){
        if (file_exists('modelos/'.$nombreModelo.'.php')){
            require_once('modelos/'.$nombreModelo.'.php');
        }
    });

    spl_autoload_register(function($nombreControlador){
        if (file_exists('controladores/'.$nombreControlador.'.php')){
            require_once('controladores/'.$nombreControlador.'.php');
        }
    });

    spl_autoload_register(function($nombreControlador_srv){
        if (file_exists('controladores_srv/'.$nombreControlador_srv.'.php')){
            require_once('controladores_srv/'.$nombreControlador_srv.'.php');
        }
    });



	