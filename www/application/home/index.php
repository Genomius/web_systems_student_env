<?php
Routing::add(array(
    'pattern' => '/',
    'matches' => array(
        'Module' => 'Home',
        'Sector' => 'index'
    )
));

Routing::add(array(
    'pattern' => '/:slug_1',
    'matches' => array(
        'Module' => 'Home',
        'Sector' => 'index1'
    ),
    'ArticleID' => array(
        'slug_1' => '\s+',
    )
));

Routing::add(array(
    'pattern' => '/:slug_1/:slug_2',
    'matches' => array(
        'Module' => 'Home',
        'Sector' => 'index2'
    ),
    'ArticleID' => array(
        'slug_1' => '\s+',
        'slug_2' => '\d+',
    )
));
?>