<?php

require '../vendor/autoload.php';

use Automattic\WooCommerce\Client;

/* // Conexión WooCommerce API destino
// ================================
$url_API_woo = 'https://bestwayapp.market/';
$ck_API_woo = 'ck_9fc75dd2541f3322bdfba16dd5e2cfb5d969ca45'; //llave de usuario de actualizacion 
$cs_API_woo = 'cs_cd19e4821ae244ba011379ce0f3df8b8a0fdf001';

$woocommerce = new Client(
    $url_API_woo,
    $ck_API_woo,
    $cs_API_woo,
    ['version' => 'wc/v3']
);
// ================================
 */


// Conexión WooCommerce API destino
// ================================
$woocommerce = new Client(
    'http://localhost/pruebapaginawordpres/', 
    'ck_c2ef3df2b4cf256ce0dc40aa6930823cf770b07a', //prueba 2 claves--->local
    'cs_04526af0134d598dba0407f76a2506ab26873ef1',
    [
        'wp_api' => true,
        'version' => 'wc/v1',
    ]
);
// ================================


// Conexión API origen
// ===================
$url_API="http://localhost/prueba2/prueba_wp_api/product.json";

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url_API);

echo "➜ Obteniendo datos origen ... \n";
$items_origin = curl_exec($ch);
curl_close($ch);

if ( ! $items_origin ) {
    exit('❗Error en API origen');
}
// ===================


// Obtenemos datos de la API de origen
$items_origin = json_decode($items_origin, true);

print_r ($items_origin);

/* 

// formamos el parámetro de lista de SKUs a actualizar
$param_sku ='';
foreach ($items_origin as $item){
    $param_sku .= $item['sku'] . ',';
}

echo "➜ Obteniendo los ids de los productos... \n";
// Obtenemos todos los productos de la lista de SKUs
$products = $woocommerce->get('products/?sku='. $param_sku);

// Construimos la data en base a los productos recuperados
$item_data = [];
foreach($products as $product){

    // Filtramos el array de origen por sku
    $sku = $product->sku;
    $search_item = array_filter($items_origin, function($item) use($sku) {
        return $item['sku'] == $sku;
    });
    $search_item = reset($search_item);

    // Formamos el array a actualizar
    $item_data[] = [
        'id' => $product->id,
        'regular_price' => $search_item['price'],
        'stock_quantity' => $search_item['qty'],
    ];

}

// Construimos información a actualizar en lotes
$data = [
    'update' => $item_data,
];

echo "➜ Actualización en lote ... \n";
// Actualización en lotes
$result = $woocommerce->post('products/batch', $data);

if (! $result) {
    echo("❗Error al actualizar productos \n");
} else {
    print("✔ Productos actualizados correctamente \n");
}
 */



?>