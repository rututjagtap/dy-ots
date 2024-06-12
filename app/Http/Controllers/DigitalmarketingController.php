<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalmarketingController extends Controller
{
    public function index(){
        return view('pages.digital-marketing-services');
    } 
}
