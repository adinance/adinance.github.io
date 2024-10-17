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

    public function method_to_menu($method_name) {
        $menu = str_replace('_', ' ', $method_name);
        return ucwords($menu);
    }

    public function method_to_link($method_name) {
        $menu = str_replace('_', '-', $method_name);
        return strtolower($menu);
    }

    public function th_date($date) {

        // $date = "2022-09-22";
        $ThDay = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์");
        $ThMonth = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");

        $myDATE = ($date);
        $week   = date("w", strtotime($myDATE)); // ค่าวันในสัปดาห์ (0-6)
        $months = date("m", strtotime($myDATE)) - 1; // ค่าเดือน (1-12)
        $day    = date("d", strtotime($myDATE)); // ค่าวันที่(1-31)
        $years  = date("Y", strtotime($myDATE)) + 543; // ค่า ค.ศ.บวก 543 ทำให้เป็น ค.ศ.

        // return "วัน$ThDay[$week]
        //     ที่ $day
        //     เดือน $ThMonth[$months]
        //     พ.ศ. $years";

        return $day . ' ' . $ThMonth[$months] . ' ' . $years;
    }

}