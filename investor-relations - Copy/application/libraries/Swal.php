<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Swal {

    protected $cdn = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';
    protected $path = BASE_URL . 'assets/js/sweetalert2@11.js';

    public function __construct() {

    }

    public function test(){
        $swal = 'Swal.fire("SweetAlert2 is working!")';
        return $swal;
    }

    public function sent($icon = 'success', $title = 'Message Sent!' , $showConfirmButton = 'false', $timer = 1500) {
        $swal = '
            Swal.fire({
                icon: "' . $icon . '",
                title: "' . $title . '",
                showConfirmButton: ' . $showConfirmButton . ',
                timer: ' . $timer . '
            });
        ';
        return $swal;
    }

}