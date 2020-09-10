<?php
require '../vendor/autoload.php';

use Automattic\WooCommerce\Client;

class Connectwoo{
    private $check = false;
    private $woocommerce = " ";
    function credencialToWoo(){
        $url = 'http://localhost/pruebapaginawordpres/';
        $clave_publica = 'ck_0d5fef5c02ca4fc8c94362a8be12e5fe794d8c71';
        $clave_privada = 'cs_e697b042675b891fde23587d140b8ee3683fbec6';
        /*$url = 'https://www.bestwayapp.market/';
        $clave_publica = 'ck_4fbb6baab9affa6d225eda257d2456270038fbc6'; 
        $clave_privada = 'cs_3391a766be90f30b2fae17b42247b2a33ea3f23a';*/ 
        $this->woocommerce = new Client($url, $clave_publica, $clave_privada, ['wp_api'=>true,'version'=>'wc/v3','timeout' => 400] );
    }

    function send($list_product_json){
        try{
            $this->credencialToWoo();
            print_r($this->woocommerce->post('products',$list_product_json));
            $this->check = true;
        }catch(Exception $e){
            $this->check=false;
            echo $e. "<br>"; //muestra el porque el producto no fue creado o fue creado, muestra el porque del error
        }
        return $this->check;
    }
 }

?>