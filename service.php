<?php
    error_reporting(E_ALL);
    ini_set('upload_max_filesize', '2048M');
    ini_set('post_max_size', '2048M');
    ini_set('display_errors', 1);
    date_default_timezone_set('America/Mexico_City');
    require_once('clases/errores.php');
    require_once('requires.php');

    $errores = new errores();

    if (!isset($_GET['controlador'])){
        $_GET['controlador'] = '';
    }

    if (!isset($_GET['metodo'])){
        $_GET['metodo'] = '';
    }

    if (!isset($_GET['session_id'])){
        $_GET['session_id'] = 'AVBC';
    }

    if ($_GET['controlador'] === 'session' && $_GET['metodo'] === 'login_bd'){

        $link = new database();
        $seguridad = new seguridad($link);

        $res = $seguridad->login_bd();

        if (isset($res['error'])){
            header("HTTP/1.1 400");
            echo json_encode($errores->limpia_html_error($res));
            exit;
        }

        header("HTTP/1.1 200 OK");
        echo json_encode($res);
        exit;


    }

    if ($_GET['controlador'] === 'session' && $_GET['metodo'] === 'login_off'){

        $link = new database();
        $seguridad = new seguridad($link);

        $res = $seguridad->login_off();
        if (isset($res['error'])){
            header("HTTP/1.1 400");
            echo json_encode($errores->limpia_html_error($res));
            exit;
        }
        header("HTTP/1.1 200 OK");
        echo json_encode($res);
        exit;
    }
    $mensaje = '';
    $link = new database();
    $seguridad = new seguridad($link);
    $valida_session = $seguridad->valida_session_id();

    if (isset($valida_session['error'])){
        header("HTTP/1.1 400");
        echo json_encode($errores->limpia_html_error($valida_session));
        exit;
    }

    if ($valida_session){
        define('CONTROLADOR',$_GET['controlador']);
        define('METODO',$_GET['metodo']);

        $nombre_controlador = 'controlador_srv_'.CONTROLADOR;
        if (file_exists('controladores_srv/'.$nombre_controlador.'.php')){
            $controlador = crear_controlador_srv($nombre_controlador,$link);

            if (method_exists($controlador,METODO)){
                $metdo = METODO;
                $resultado = $controlador->$metdo();
            }
            else{
                $mensaje = 'El metodo '.METODO.' no existe';
            }
        }
        else{
            $mensaje = 'El controldaor '.CONTROLADOR.' no existe';
        }
    }
    header("HTTP/1.1 400");
    echo json_encode(array('mensaje' => $mensaje));
    exit;




