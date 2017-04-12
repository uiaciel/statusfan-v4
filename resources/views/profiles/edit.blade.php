@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>
                @if(Session::has('success'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif

                <div class="panel-body">
                    <form action="{{ route('profile.update')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="avatar">Unggah Photo</lable>
                        <input type="file" name="avatar" class="form-control" accept="image/*" >
                      </div>
                      <div class="form-group">
                        <label for="kota">Kota Asal</lable>
                        <input type="text" name="kota" id="kota" value="{{ $info->kota }}" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                        <label for="kota">Tentang Kamu</lable>
                        <textarea type="text" name="bio" id="bio" class="form-control" required>{{ $info->bio }}</textarea>

                      </div>
                      <div class="form-group">
                        <p class="text-center">
                          <button class="btn btn-primary btn-lg">
                            Update
                          </button>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
