<?php

require '../vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/pruebapaginawordpres/', 
    'ck_c2ef3df2b4cf256ce0dc40aa6930823cf770b07a', //prueba 2 claves--->local
    'cs_04526af0134d598dba0407f76a2506ab26873ef1',
    [
        'wp_api' => true,
        'version' => 'wc/v1',
    ]
);

/* $url_API="http://localhost/prueba2/prueba_wp_api/product.json";
$url_API = json_decode($url_API.true); */
//creacion del producto
$data = [
    'name' => 'Premium Quality',
    'type' => 'simple',
    'regular_price' => '21.99',
    'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
    'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
    'categories' => [
        [
            'id' => 9
        ],
        [
            'id' => 14
        ]
    ],
    /* 'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
        ],
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
        ]
    ] */
];

print_r($woocommerce->post('products', $data));
 



?>