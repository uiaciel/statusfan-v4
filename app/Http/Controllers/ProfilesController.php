<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\user;
use App\Mading;
use App\Kategori;
use App\Http\Controllers\BerandaController;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($slug)
    {
      $user = user::where('slug', $slug)->first();
      
      $id_user = user::where('slug', $slug)->pluck('id');


      $listcat = Kategori::All();

      $blogs = Mading::orderBy('id', 'desc')
                ->where('user_id', $id_user)
                ->where('status', 1)
                ->where('privacy', 0)
                ->limit(12)
                ->get();

      $count = Mading::where('user_id', $id_user)
                ->count();

      $point = $count * 10;


      return view('profiles.profile')
        ->with('user', $user)
        ->with('list', $listcat)
        ->with('counts', $count)
        ->with('poin', $point)
        ->with('blogs', $blogs);
    }

    public function edit()
    {
      return view('profiles.edit')->with('info', Auth::user()->profile);
    }

    public function update(Request $update)
    {


      $this->validate($update, [
        'kota' => 'required',
        'bio' => 'required|max:255'
      ]);

      Auth::user()->profile()->update([
        'kota' => $update->kota,
        'bio' => $update->bio
      ]);

      if($update->hasFile('avatar'))
      {
        Auth::user()->update([
          'avatar' => $update->avatar->store('public/avatars')
        ]);
      }

      Session::flash('success','Update profile berhasil disimpan..');
      return redirect()->back();
    }


}
