<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mading;
use App\Kategori;

class BerandaController extends Controller
{
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

      return view('beranda', [
        'blogs' => $blogs,
        'kates'  => $kates,
        'top'   => $top,
        'list'  => $listcat

     ]);
  }

  public function kategori()
  {
      $kate = Mading::orderBy('id', 'desc')
                ->where('status', 1)
                ->where('privacy', 0)
                ->whereColumn('category_id', 11)
                ->limit(12)
                ->get();
      return view('beranda', ['blogs' => $kate ]);
  }

  public function show($slug)
  {
    $blog = Mading::where('slug', $slug)->first();
    $listcat = Kategori::All();

    // return to 404 page
    if(!$blog){
      abort(404);
    }

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

    // display the article to single page
    return view('mading.detail', [
      'blog' => $blog,
      'kates'  => $kates,
      'top'   => $top,
      'list'  => $listcat
    ]);
  }
}
