@extends('layouts.app')

@section('content')
<div id="story-page-cont" class="container">
<div id="story-show-body">

<div id="story-content-column">
  <div class="story-title-container">
    <div class="hidden-xs">

          <h1 class="story-title">{{ $blog->title }}</h1>
          <span class="story-subtitle">Penulis : <a href="/sahabat/{{ $blog->user->slug }}">{{ $blog->user->name }}</a></br> Dipublis : {{\Carbon\Carbon::instance($blog->created_at)->toFormattedDateString()}} - Kategori : {{$blog->category->title}} dibaca : {{ $blog->viewer }}</span>

          <hr class="story-hr">
          <img src="{{ Storage::url($blog->image) }}" class="img-responsive" style="width:100%" />
          <p>Sumber gambar : {{ $blog->source_img }}</p>
          <hr>

          {!! $blog->content !!}

    </div>
        <div class="box story-box story-box-featured story-cont visible-xs">
          <div class="anchor-image">
            <div class="story-page-featured-image-container" data-large="{{ $blog->image }}" data-medium="{{ $blog->image }}" data-small="{{ $blog->image }}" style="background-image: url({{ $blog->image }});"></div>
            <h3 style="margin-bottom: 0;">
              <span style="font-size:12px;">Dipublis : {{\Carbon\Carbon::instance($blog->created_at)->toFormattedDateString()}} -  dibaca : {{ $blog->viewer }}</span></br>
              <span class="story-title">{{ $blog->title }}</span>
              <hr class="story-hr">
              <span style="font-size:12px;">Oleh : <a href="/sahabat/{{ $blog->user->slug }}" style="display:inline-block;">{{ $blog->user->name }}</a> </br>Kategori : {{$blog->category->title}}</span>
              </h3>
              <div class="content-blog" style="padding: 15px;text-align: left;background-color: white;">
              {{!! $blog->content !!}}
              </div>
            </div>

        </div>
        <div id="story-content-column-inner" data-author="nadlman@whisper.sh" data-url="/stories/e963c1dc-2329-49ba-86eb-10a497496e75/21-Secrets-From-People-Who-Work-At-Gyms">

    <!-- Beginning of Bottom Social buttons -->
    <div class="whisper-share-cont">
      <a href="#" class="facebook-button ga" data-url="http://whisper.sh/stories/e963c1dc-2329-49ba-86eb-10a497496e75/21-Secrets-From-People-Who-Work-At-Gyms?utm_campaign=web-story&amp;utm_content=bottom&amp;utm_medium=social&amp;utm_source=facebook" data-ga-label="facebook story share bottom" data-ga-category="share">
  <i class="fa fa-facebook-official"></i>
  <span>
    <span class="hidden-xs">Share This Story on Facebook</span>
    <span class="visible-xs">Share Story</span>
  </span>
</a>

      <a href="https://twitter.com/intent/tweet?text=%2221+Secrets+From+People+Who+Work+At+Gyms%22&amp;url=http%3A%2F%2Fwhisper.sh%2Fstories%2Fe963c1dc-2329-49ba-86eb-10a497496e75%2F21-Secrets-From-People-Who-Work-At-Gyms%3Futm_campaign%3Dweb-story%26utm_content%3Dbottom%26utm_medium%3Dsocial%26utm_source%3Dtwitter&amp;via=Whisper" class="twitter-button ga" target="_blank" data-ga-label="twitter story share bottom" data-ga-category="share">
  <i class="fa fa-twitter"></i>
</a>

      <a href="http://pinterest.com/pin/create/button?description=%2221+Secrets+From+People+Who+Work+At+Gyms+-+Here+to+motivate+you%22&amp;media=https%3A%2F%2Fcdn-misc.wimages.net%2Fstories%2Fe963c1dc-2329-49ba-86eb-10a497496e75-large.jpg%3Fv%3D2&amp;url=http%3A%2F%2Fwhisper.sh%2Fstories%2Fe963c1dc-2329-49ba-86eb-10a497496e75%2F21-Secrets-From-People-Who-Work-At-Gyms%3Futm_campaign%3Dweb-story%26utm_content%3Dbottom%26utm_medium%3Dsocial%26utm_source%3Dpinterest" class="pinterest-button ga" target="_blank" data-ga-label="pinterest story share bottom" data-ga-category="share">
  <i class="fa fa-pinterest"></i>
</a>

    </div>
    <!-- End of Bottom social buttons -->






</div>
<div class="social-sticky-bar " style="position: absolute; left: 843.5px; top: 615.547px; display: block;">
  <ul>
    <li>
      <a href="#" class="facebook-button-2 ga" data-url="http://whisper.sh/stories/e963c1dc-2329-49ba-86eb-10a497496e75/21-Secrets-From-People-Who-Work-At-Gyms?utm_campaign=web-story&amp;utm_content=sticky&amp;utm_medium=social&amp;utm_source=facebook" data-ga-label="facebook story share sticky" data-ga-category="share">
  <i class="fa fa-facebook"></i>
</a>

    </li>
    <li>
      <a href="https://twitter.com/intent/tweet?text=%2221+Secrets+From+People+Who+Work+At+Gyms%22&amp;url=http%3A%2F%2Fwhisper.sh%2Fstories%2Fe963c1dc-2329-49ba-86eb-10a497496e75%2F21-Secrets-From-People-Who-Work-At-Gyms%3Futm_campaign%3Dweb-story%26utm_content%3Dsticky%26utm_medium%3Dsocial%26utm_source%3Dtwitter&amp;via=Whisper" class="twitter-button ga" target="_blank" data-ga-label="twitter story share sticky" data-ga-category="share">
  <i class="fa fa-twitter"></i>
</a>

    </li>
    <li>
      <a href="http://pinterest.com/pin/create/button?description=%2221+Secrets+From+People+Who+Work+At+Gyms+-+Here+to+motivate+you%22&amp;media=https%3A%2F%2Fcdn-misc.wimages.net%2Fstories%2Fe963c1dc-2329-49ba-86eb-10a497496e75-large.jpg%3Fv%3D2&amp;url=http%3A%2F%2Fwhisper.sh%2Fstories%2Fe963c1dc-2329-49ba-86eb-10a497496e75%2F21-Secrets-From-People-Who-Work-At-Gyms%3Futm_campaign%3Dweb-story%26utm_content%3Dsticky%26utm_medium%3Dsocial%26utm_source%3Dpinterest" class="pinterest-button ga" target="_blank" data-ga-label="pinterest story share sticky" data-ga-category="share">
  <i class="fa fa-pinterest"></i>
</a>

    </li>

  </ul>
</div>

  </div>
  </div>
  <div id="story-sidebar">
    <div class="sidebar">
      <h2>Instagram</h2>
      <img src="https://instagram.fcgk4-1.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/17494668_463176014027102_1903235888737943552_n.jpg" class="img-responsive">
      <h2>Populer</h2>
      @foreach ($top as $toop)
      <div class="box story-box ga" data-ga-label="sidebar story" data-ga-category="navigation" data-ga-value="2">
        <a class="anchor-image" href="/mading/{{ $toop->slug }}">
          <span></span>
          <i>{{ $toop->viewer }}</i>
          <div class="img-responsive sidebar-image-container" data-large="{{ $toop->image }}" data-medium="{{ $toop->image }}" data-small="{{ $toop->image }}" style="
            background-image: url({{ $toop->image }});"></div>
          <h3>{{ $toop->title }}</h3>
        </a>
      </div>
      @endforeach

      </div>
  </div>
</div>
</div>

@endsection
