<?php
Routing::add(array(
    'pattern' => '/home/:slug_1/:slug_2',
    'matches' => array(
        'Module' => 'Home',
        'Sector' => 'index'
    ),
    'ArticleID' => array(
        'slug_1' => '\d+',
        'slug_2' => '\s+',
    )
));

Routing::add(array(
    'pattern' => '/home/',
    'matches' => array(
        'Module' => 'Home',
        'Sector' => 'index1'
    )
));
?>