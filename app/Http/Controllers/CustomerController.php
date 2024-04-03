<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function name() {
        echo "Kesyza Andriana Hartuti";
    }

    public function city($city) {
        echo $city;
    }

    public function fullname($name, $nrp) {
        echo "Nama Saya " .$name ." NRP Saya " .$nrp;
    }
}
