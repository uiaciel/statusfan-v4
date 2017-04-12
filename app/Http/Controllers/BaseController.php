<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mading;
use App\Kategori;

class BaseController extends Controller
{
  public function kategori($slug)
  {

    $list = Kategori::All();

    //$query = $request->get('37');
    $hasil = Mading::where('category_id', 'LIKE', '%' . $slug . '%')->paginate(10);
    return view('mading.kategori', compact('hasil', 'list'));

    // return to 404 page


  }

  public function cari(Request $request)
  {

    $list = Kategori::All();

    $query = $request->get('q');
    $hasil = Mading::where('title', 'LIKE', '%' . $query . '%')->paginate(10);
    return view('mading.cari', compact('hasil', 'query', 'list'));

    // return to 404 page


  }
}
