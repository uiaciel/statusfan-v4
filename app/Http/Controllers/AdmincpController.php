<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmincpController extends Controller
{
    public function index () {

      return view('admincp.index');
    }

}
