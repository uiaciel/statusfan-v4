@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update News</div>

                <div class="panel-body">
                    @foreach ($blogs as $blog)

                    <a href="/mading/{{ $blog->slug }}"><h3>{{ $blog->title }}</h3></a>
                    <img src="{{ $blog->image }}" class="img-responsive">
                    {{ $blog->content }}
                    <hr>
                    <p>{{ $blog->sumber_gambar }}</p>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
