<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    //index
    public function index(){
        $names = ["Wahyu Febrianto", "Alex Febrian", "Linus Tovalds", "Steve Jobs"];

        return view("about", ["names" => $names]);
    }
}
