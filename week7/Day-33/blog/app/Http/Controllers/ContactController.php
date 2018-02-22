<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return '<h1>This is my Contact Page</h1>';
    }
}
