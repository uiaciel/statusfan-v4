@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
                <div class="panel-body">
<h2>Add new post</h2>
<form class="form-horizontal" role="form" method="POST" action="{{ route('mading.update') }}">
    {{ csrf_field() }}

    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
        <label for="judul" class="col-md-4 control-label">Judul</label>

        <div class="col-md-6">
            <input id="judul" type="text" class="form-control" name="judul" value="Google" required autofocus>

            @if ($errors->has('judul'))
                <span class="help-block">
                    <strong>{{ $errors->first('judul') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
        <label for="deskripsi" class="col-md-4 control-label">deskripsi</label>

        <div class="col-md-6">
            <input id="deskripsi" type="text" class="form-control" name="deskripsi" value="{{ $blog->deskripsi }}" required autofocus>

            @if ($errors->has('deskripsi'))
                <span class="help-block">
                    <strong>{{ $errors->first('deskripsi') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('kategori_id') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Kategori</label>

        <div class="col-md-6">
            <select name="kategori_id" id="kategori_id" class="form-control">
              <option value="1">Pengetahuan</option>
              <option value="2">Cerita</option>
            </select>

            @if ($errors->has('kategori_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('kategori_id') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('konten') ? ' has-error' : '' }}">
        <label for="konten" class="col-md-4 control-label">Konten</label>

        <div class="col-md-6">

            <textarea id="konten" type="text" class="form-control" name="konten" required>{{ $blog->konten }}</textarea>
            @if ($errors->has('konten'))
                <span class="help-block">
                    <strong>{{ $errors->first('konten') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('gambar') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">gambar</label>

        <div class="col-md-6">
            <input id="gambar" type="text" class="form-control" value="{{ $blog->gambar }}" name="gambar" required>

            @if ($errors->has('gambar'))
                <span class="help-block">
                    <strong>{{ $errors->first('gambar') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('sumber_gambar') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">sumber_gambar</label>

        <div class="col-md-6">
            <input id="sumber_gambar" type="text" class="form-control" name="sumber_gambar" value="{{ $blog->sumber_gambar }}" required>

            @if ($errors->has('gambar'))
                <span class="help-block">
                    <strong>{{ $errors->first('sumber_gambar') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
