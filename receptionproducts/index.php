<?php
 include("receptionproducts.php");
 include("reception.php");

$rp = new  ReceptionProduct();
    //crearon el producto, para probar que si funciona
    $data2 = [
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
        $data = [[
            'name' => 'CAFETERA',
            'type' => 'simple',
            'regular_price' => '21.99',
            'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
            'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
            'tags' => [
                [
                    'id' => 17
                ],
            ],
            
            'categories' => [
                [
                    'id' => 16
                ],
               
            ],
            /* 'images' => [
                [
                    'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
                ],
                [
                    'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
                ]
            ] */
                ],
                [
                    'name' => 'SANDUCHERA',
                    'type' => 'simple',
                    'regular_price' => '21.99',
                    'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
                    'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
                    'tags' => [
                        [
                            'id' => 17
                        ],
                    ],
                    
                    'categories' => [
                        [
                            'id' => 16
                        ],
                    ],
                    /* 'images' => [
                        [
                            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
                        ],
                        [
                            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
                        ]
                    ] */
                ]];  
    /*$result = Array();
    $result = json_encode($data);
    echo $result;*/
    //echo $data2;
    $rp->setData($data);
    $rp->processData();

?>