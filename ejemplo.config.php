<?php

    define('PRODUCCION' , false);

    // config BD
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '12345678');
	define('DB_NAME', 'framework2');

    // usuario y contra para el inicio de session
    define('DB_USER_SESSION', DB_USER);
	define('DB_PASSWORD_SESSION', DB_PASSWORD);
	
	// config RUTA
	define('RUTA_PROYECTO','http://localhost/');
	define('NOMBRE_PROYECTO','');
	define('RUTA_BASE',RUTA_PROYECTO.'index.php');

    // COLORES
    define('COLORBASE','style="color:#17a2b8"');
	define('COLORBASE_BOOTSTRAP','info');