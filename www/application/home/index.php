<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 03.05.2015
 * Time: 17:38
 */
Routing::Add(array(
    'pattern' => '/home/:id/:goots',
    'matches' => array(
        'Module' => 'Home',
        'Sector' => 'index'),
    'ArticleID' => array(
        'id'=> '\d+','goots'=>'\S+' )
));

Routing::Add(array(
    'pattern' => '/home/',
    'matches' => array(
        'Module' => 'Home',
        'Sector' => 'index1')));