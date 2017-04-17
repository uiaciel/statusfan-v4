@extends('layouts.app')

@section('content')
<div class="container home-container">
    <div class="row home-row">
          <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 home-content">
              <div class="content home-content">
                    <h2>Cerita Terbaru</h2>
                    <div class="row pop-stories-content-row">
                      <div class="clearfix visible-sm-block visible-xs-block"></div>
                          @foreach ($blogs as $blog)
                          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 small-story-box">
                              <div class="box story-box ga" data-ga-label="home story" data-ga-category="navigation" data-ga-value="3">
                                <a class="anchor-image" href="/mading/{{ $blog->slug }}">
                                  <div class="img-responsive story-box-html-container" data-large="{{ Storage::url($blog->image) }}" data-medium="{{ Storage::url($blog->image) }}" data-small="{{ Storage::url($blog->image) }}" style="background-image: url({{ Storage::url($blog->image) }});"></div>
                                  <h3>{{ $blog->title }}</h3>
                                </a>
                              </div>
                          </div>
                          @endforeach
                      <div class="clearfix visible-sm-block visible-xs-block"></div>
                    </div>
                    <h2>Liputan</h2>
                    <div class="row pop-stories-content-row">
                      <div class="clearfix visible-sm-block visible-xs-block"></div>
                          @foreach ($kates as $kate)
                          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 small-story-box">
                              <div class="box story-box ga" data-ga-label="home story" data-ga-category="navigation" data-ga-value="3">
                                <a class="anchor-image" href="/mading/{{ $kate->slug }}">
                                  <div class="img-responsive story-box-html-container" data-large="{{ Storage::url($kate->image) }}" data-medium="{{ Storage::url($kate->image) }}" data-small="{{ Storage::url($kate->image) }}" style="background-image: url({{ Storage::url($kate->image) }});"></div>
                                  <h3>{{ $kate->title }}</h3>
                                </a>
                              </div>
                          </div>
                          @endforeach
                      <div class="clearfix visible-sm-block visible-xs-block"></div>
                    </div>

              </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-5 hidden-xs">
            <div class="sidebar">
              <h2>Instagram</h2>
              <img src="https://instagram.fcgk4-1.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/17494668_463176014027102_1903235888737943552_n.jpg" class="img-responsive">
              <h2>Populer</h2>
              <div class="row pop-stories-content-row">
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                    @foreach ($top as $toop)

                        <div class="box story-box ga" data-ga-label="home story" data-ga-category="navigation" data-ga-value="3">
                          <a class="anchor-image" href="/mading/{{ $toop->slug }}">
                            <div class="img-responsive story-box-html-container" data-large="{{ Storage::url($toop->image) }}" data-medium="{{ Storage::url($toop->image) }}" data-small="{{ Storage::url($toop->image) }}" style="background-image: url({{ Storage::url($toop->image) }});"></div>
                            <h3>{{ $toop->title }}</h3>
                          </a>
                        </div>

                    @endforeach
                <div class="clearfix visible-sm-block visible-xs-block"></div>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
