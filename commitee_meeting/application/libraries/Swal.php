<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Swal {

    protected $cdn = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';
    protected $path = BASE_URL . 'assets/js/sweetalert2@11.js';

    public function __construct() {

    }

    public function login($data) {
        $swal = '
            Swal.fire({
                icon: "' . $data['icon'] . '",
                title: "' . $data['title'] . '",
                text: "' . $data['text'] . '",
                showConfirmButton: ' . $data['showConfirmButton'] . ',
                timer: ' . $data['timer'] . '
            });
        ';
        return $swal;
    }


    public function login_fail() {
        $swal = '
            Swal.fire({
                icon: "error",
                title: "Login Fail",
                text: "Incorrect password, pls. contact to technicial.",
                showConfirmButton: false,
                timer: 3500
            });
        ';
        return $swal;
    }

    public function login_success($redirect){
        // $swal = '
        //     Swal.fire({
        //         icon: "success",
        //         title: "Congratulation",
        //         text: "Your password is correct",
        //         showCancelButton: false,
        //         confirmButtonText: "Let\'s Go!!!"
        //     }).then(function() {
        //         window.location = " ' . $redirect . ' ";
        //     });
        // ';

        $swal = '
            Swal.fire({
                icon: "success",
                title: "Login Success",
                text: "Your password is correct",
                showConfirmButton: false,
                timer: 2000
            }).then(function() {
                window.location = " ' . $redirect . ' ";
            });
        ';
        return $swal;
    }

    public function insert_success() {
        $swal = '
            Swal.fire({
                icon: "success",
                title: "Successful!",
                text: "Thanks for filling out the form!",
                showConfirmButton: false,
                timer:4000
            });
        ';
        return $swal;
    }

    public function insert_fail() {
        $swal = '
            Swal.fire({
                icon: "success",
                title: "Fail to insert!",
                text: "Please check data again!",
                showConfirmButton: false,
                timer:4000
            });
        ';
        return $swal;
    }

    public function edit_success() {
        $swal = '
            Swal.fire({
                icon: "success",
                title: "Success!",
                text: "Your submission has been saved!",
                showConfirmButton: false,
                timer:4000
            });
        ';
        return $swal;
    }

    public function edit_fail() {
        $swal = '
            Swal.fire({
                icon: "success",
                title: "Fail to edit!",
                text: "Please check data again!",
                showConfirmButton: false,
                timer:4000
            });
        ';
        return $swal;
    }

}