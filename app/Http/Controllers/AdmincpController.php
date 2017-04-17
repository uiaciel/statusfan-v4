<?php

namespace App\Http\Controllers;

use Session;
use App\Mading;
use App\User;
use App\Kategori;
use App\Http\Requests;
use Illuminate\Http\Request;

class AdmincpController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

    public function index () {

      return view('admincp.index');
    }

    public function mading() {

      $blogs = Mading::orderBy('id', 'desc')
                ->where('status', 1)
                ->where('privacy', 0)
                ->limit(20)
                ->get();
      return view('admincp.mading.list', ['blogs' => $blogs ]);
    }

    public function users() {

      $Users = User::orderBy('id', 'desc')
                ->limit(20)
                ->get();
      return view('admincp.mading.users', ['Users' => $Users ]);
    }

    public function pending() {

      $blogs = Mading::orderBy('id', 'desc')
                ->where('status', 0)
                ->where('privacy', 0)
                ->get();
      return view('admincp.mading.pending', ['blogs' => $blogs ]);
    }
    public function uedit($id) {

      // $Users = User::orderBy('id', 'desc')
      //           ->limit(20)
      //           ->get();
      $users = User::find($id);
      return view('admincp.users.edit', ['user' => $users ]);
    }
}
