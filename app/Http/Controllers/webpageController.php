<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class webpageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
