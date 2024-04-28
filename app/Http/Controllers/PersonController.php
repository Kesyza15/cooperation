<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index() {
        $name = "Kesyza Andriana Hartuti";
        $grade = 75;

        return view('people.index', compact('name', 'grade'));
    }
}
