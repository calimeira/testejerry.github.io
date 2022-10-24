<?php

if ($_SERVER['SERVER_NAME']=='localhost') {
    //error_reporting(0);
    ini_set( 'display_errors', true );

    session_start([
        'cookie_secure' => true,
        'cookie_httponly' => true,
        //'cookie_samesite' => 'Strict'
    ]);
    
    //DESARROLLO LOCALHOST
    define( 'WEB_URL', 'http://localhost/ponzio-nft/' );
    define( 'WEB_PATH', realpath($_SERVER['DOCUMENT_ROOT']).'/ponzio-nft/' );
    define( 'WEB_PATH_HTML','/ponzio-nft/' );
} else {
    if ($_SERVER['SERVER_NAME']=='ponzio.codingco.io'){
        error_reporting(0);
        ini_set( 'display_errors', false );

        session_start([
            'cookie_secure' => true,
            'cookie_httponly' => true,
            'cookie_samesite' => 'Strict'
        ]);
        
        // STAGING
        define( 'WEB_URL', 'https://ponzio.codingco.io/' );
        define( 'WEB_PATH', realpath($_SERVER['DOCUMENT_ROOT']).'/' );
        define( 'WEB_PATH_HTML','/' );
    }else{
        error_reporting(0);
        ini_set( 'display_errors', false );

        session_start([
            'cookie_secure' => true,
            'cookie_httponly' => true,
            'cookie_samesite' => 'Strict'
        ]);
        
        // PRODUCCION
        define( 'WEB_URL', 'https://leoponzio.com/' );
        define( 'WEB_PATH', realpath($_SERVER['DOCUMENT_ROOT']).'/' );
        define( 'WEB_PATH_HTML','/' );
    }
}

include WEB_PATH.'constants.php';
include WEB_PATH.'functions.php';
list($lang, $actualLang) = getFrontLanguage();
	
?>
