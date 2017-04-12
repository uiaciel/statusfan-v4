<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BerandaController;

use Auth;
use Session;
use App\Mading;
use App\Kategori;
use App\Http\Requests;
use Illuminate\Http\Request;

class BlogController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Mading::all();
        return view('blog', ['blogs' => $blogs ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('mading.buat');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //$file_name=rand().'_'.$request->file('gambar')->getClientOriginalName();
      //$userid = Auth::user()->id;
      // create new data
      $blog = new Mading;
      $blog->title = $request->title;
      $blog->user_id = $request->user_id;
      $blog->content = $request->content;
      $blog->source_img = $request->source_img;
      //$blog->gambar = $request->gambar;
      $blog->slug=str_slug($request->judul);
      $blog->sumber_gambar = $request->sumber_gambar;
      $blog->category_id = $request->category_id;
      $blog->privacy = $request->privacy;
      $blog->show_comments = $request->show_comments;
      $blog->show_likes = $request->show_likes;
      $blog->status = $request->status;
      $blog->viewer = $request->viewer;
      $blog->tags = $request->tags;
      $blog->feature = $request->feature;
      //$blog->gambar = $file_name;

      $file = $request->file('images');
      $fileName = $file->getClientOriginalName();
      $request->file('images')->move("image/",$fileName);
      $blog->image = $fileName;

      //$request->file('gambar')->move('storage/uploads/',$file_name);
      $blog->save();

      Session::flash('flash_message', 'Task successfully added!');
      return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Mading::find($id);
        return view('mading.edit', ['blog' => $blog ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      Mading::find($id)->update($request->all());

      Session::flash('flash_message', 'Task successfully added!');
      return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
