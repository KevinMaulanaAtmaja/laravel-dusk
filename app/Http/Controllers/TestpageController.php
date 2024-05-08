<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestpageController extends Controller
{
    public function testpage(){
        return view("testpage");
    }
}
