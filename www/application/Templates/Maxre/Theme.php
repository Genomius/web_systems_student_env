<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 25.04.2015
 * Time: 14:51
 */

class LimeTheme {
    private $views = array(
        'Page' => 'VainPage',
        'TextField' => 'VainTextField',
        'ButtonField' => 'VainButtonField',
        'Password' => 'VainPassword',
        'Form' => 'VainForm'
    );

    function GetView($view_name) {
        return isset($this->views[$view_name]) ? $this->views[$view_name] : null;
    }
}