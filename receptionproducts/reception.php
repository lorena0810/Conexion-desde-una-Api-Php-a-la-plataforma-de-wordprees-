<?php
//se logea, para dar permisoss de autorizacion 
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="reciveProduct"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'No estas autorizado para entrar';
    exit;
} else {
    $usuario = 'dayana';
    $pass = 'php';
    if ($_SERVER['PHP_AUTH_USER'] == $usuario && $_SERVER['PHP_AUTH_PW'] == $pass)
    {
        //aca debe leer los productos en JSON
    /* echo "<p>Hola {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Tu ingresaste {$_SERVER['PHP_AUTH_PW']} como tu password.</p>"; */


    }else{
        echo 'No estas autorizado para entrar';
        exit;


    }
   
}


?>