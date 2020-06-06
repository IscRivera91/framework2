<?php

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

    spl_autoload_register(function($nombreAyuda){
        if (file_exists('ayudas/'.$nombreAyuda.'.php')){
            require_once('ayudas/'.$nombreAyuda.'.php');
        }
    });
    
