<?php
    function header_url(string $controlador='',string $metodo='', string $session_id='',string $mensaje='',
                        string $registro_id = ''){
        $parametros = "?";
        if ($controlador !== ''){
            $parametros .= "controlador=$controlador&";
        }
        if ($metodo !== ''){
            $parametros .= "metodo=$metodo&";
        }
        if ($session_id !== ''){
            $parametros .= "session_id=$session_id&";
        }
        if ($mensaje !== ''){
            $parametros .= "mensaje=$mensaje&";
        }
        if ($registro_id !== ''){
            $parametros .= "registro_id=$registro_id&";
        }
        if ($parametros === '?'){
            $parametros = trim($parametros,'?');
        }
        $parametros = trim($parametros,'&');
        header('Location: '.RUTA_BASE.$parametros);

    }

    function get_url(string $controlador='',string $metodo='', string $session_id='',string $mensaje='',
                             string $registro_id = ''){

        $parametros = "?";
        if ($controlador !== ''){
            $parametros .= "controlador=$controlador&";
        }
        if ($metodo !== ''){
            $parametros .= "metodo=$metodo&";
        }
        if ($session_id !== ''){
            $parametros .= "session_id=$session_id&";
        }
        if ($mensaje !== ''){
            $parametros .= "mensaje=$mensaje&";
        }
        if ($registro_id !== ''){
            $parametros .= "registro_id=$registro_id&";
        }
        if ($parametros === '?'){
            $parametros = trim($parametros,'?');
        }
        $parametros = trim($parametros,'&');

        return RUTA_BASE.$parametros;
    }

    function valida_parametro_get(string $get){
        if (!isset($_GET[$get]) || is_null($_GET[$get]) || (string)$_GET[$get] === ''){
            require_once('views/inicio/login.php');
            exit;
        }
    }

    function crear_controlador(string $nombre_controlador,database $link ):controlador{
        return new $nombre_controlador($link);
    }

    function crear_controlador_srv(string $nombre_controlador,database $link ):controlador_srv{
        return new $nombre_controlador($link);
    }

    function crear_modelo(string $nombre_modelo,database $link ):modelo{
        return new $nombre_modelo($link);
    }