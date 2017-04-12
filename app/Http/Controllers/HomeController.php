<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mading;
use App\Kategori;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $blogs = Mading::orderBy('id', 'desc')
                   ->where('status', 1)
                   ->where('privacy', 0)
                   ->limit(12)
                   ->get();

         $kates = Mading::orderBy('id', 'desc')
                   ->where('status', 1)
                   ->where('privacy', 0)
                   ->where('category_id', 12)
                   ->limit(12)
                   ->get();

         $top = Mading::orderBy('id', 'asc')
                   ->where('status', 1)
                   ->where('privacy', 0)
                   ->having('viewer', '>', 1000)
                   ->limit(5)
                   ->get();

         $listcat = Kategori::All();

         return view('home', [
           'blogs' => $blogs,
           'kates'  => $kates,
           'top'   => $top,
           'list'  => $listcat

        ]);
     }
}
