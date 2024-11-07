<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utility {

    public function __construct() {
    //     // Do something with $params
    }

    public function preprint($data) {

        echo "<pre>";
        print_r($data);
        echo "</pre>";

    }

    
}