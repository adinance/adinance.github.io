<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilities {

    // public function __construct($params) {
    //     // Do something with $params
    // }

    public function print($data) {

        echo "<pre>";
        print_r($data);
        echo "</pre>";

    }

    public function method_to_menu($method_name){
        $menu = str_replace('_', ' ', $method_name);
        return ucwords($menu);
    }

    public function method_to_link($method_name){
        $menu = str_replace('_', '-', $method_name);
        return strtolower($menu);
    }
}