<?php
//recepcion de productos 
include("connectwoo.php");
class ReceptionProduct{
    private $data= "";
    private  $cw ;

    function __construct() {
        $cw = new Connectwoo();
    }

    function setData($d_json){
            $this->data = $d_json;

        }
    function getData(){
            return $this->data;
        }
    function processData(){
        $listproduct = $this->data;
         $total_product = count($listproduct);
        if($total_product != 0){
            for($x=0;$x<$total_product;$x++){
                //$listproduct[$x]["regular_price"] = $listproduct[$x]["regular_price"] + 300;
            }
            for($x=0;$x<$total_product;$x++){
                $this->sendDataToWoocomerce($listproduct[$x]);
            }
        } 
        //$this->sendDataToWoocomerce($this->data);
    }
    function sendDataToWoocomerce($product){
        $cw = new Connectwoo();
        if($cw->send($product)){
            echo "Producto creado<br>";
        }else{
            echo "Producto no creado<br>";
        }
    }

}
?>