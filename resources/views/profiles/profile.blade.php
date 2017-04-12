@extends('layouts.app')

@section('content')

<div class="container" style="margin-top:30px">
  <div class="row">


  <div class="col-md-4">


    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">{{ $user->name}}'s Profile</h3>

      </div>
      <div class="panel-body">
        <img src="{{ Storage::url($user->avatar) }}" class="img-responsive">
      </div>
    </div>


  </div>
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Tentang Saya</h3>
      </div>

      <div class="panel-body">
        <blockquote>
            "{{ $user->profile->bio }}"
        </blockquote>

        <p>Asal kota : {{ $user->profile->kota }} </p>
        @if($user->id = Auth::user()->id)
        <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-info">Edit Profile</a>
        @endif
      </div>
    </div>
    <h3>Cerita Pengalaman saya</h3>
    <hr />
    @foreach ($blogs as $blog)

    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 small-story-box">
                              <div class="box story-box ga" data-ga-label="home story" data-ga-category="navigation" data-ga-value="3">
                                <a class="anchor-image" href="/mading/{{ $blog->slug }}">
                                  <div class="img-responsive story-box-html-container" data-large="{{ $blog->image }}" data-medium="{{ $blog->image }}" data-small="{{ $blog->image }}" style="background-image: url({{ $blog->image }});"></div>
                                  <h3>{{ $blog->title }}</h3>
                                </a>
                              </div>
                          </div>



    @endforeach



  </div>
  </div>

</div>

@stop
