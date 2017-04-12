<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="/css/style.css" rel="stylesheet" type="text/css">
  <link href="/css/jquery-ui.css" rel="stylesheet" type="text/css">
  <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">

  <link href="https://cdn-webcache.wimages.net/css/dinround-pro-7dc5364f2edd62c215644aff97369399.css?vsn=d" rel="stylesheet" type="text/css" />
  <link href="https://cdn-webcache.wimages.net/css/dintext-pro-a2879a2007210509a658976b4678d5f9.css?vsn=d" rel="stylesheet" type="text/css" />
  <link href="https://cdn-webcache.wimages.net/css/video-js-7a1e8ed8fb8e4bc74fbdf9c2e34cf496.css?vsn=d" rel="stylesheet" type="text/css" />
  <link href="https://cdn-webcache.wimages.net/css/videojs.ads-85f529239fb70be6fb284a5f3c79fafb.css?vsn=d" rel="stylesheet" type="text/css" />
  <link href="https://cdn-webcache.wimages.net/css/videojs.ima-11f1e66bb5e208290483f69b42f2d5cf.css?vsn=d" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

<div class="visible-xs">
  <div id="navbar-mobile">
    <div class="navbar-inner">
      <a href="#" class="mobile-nav-close-button"><i class="sh sh-close"></i></a>
      <ul>
        <li><a href="#" class="search-link ga" data-ga-label="search clicked" data-ga-category="navigation">Search</a></li>
        <li><a href="/" class="active ga" data-ga-label="home clicked in menu" data-ga-category="navigation">Home</a></li>
        @foreach ($list as $catlist)
        <li><a href="/{{ $catlist->title }}" class="ga" data-ga-label="jobs page clicked" data-ga-category="navigation">{{ $catlist->title }}</a></li>
        @endforeach
        @if (Auth::user())
        <li><a href="{{ route('kirim.cerita') }}" class="active ga" data-ga-label="home clicked in menu" data-ga-category="navigation">Kirim Cerita</a></li>
              @else
              <li><a href="{{ url('/login') }}" class="active ga" data-ga-label="home clicked in menu" data-ga-category="navigation">Login</a></li>

              @endif
      </ul>
      <hr>
      <p class="text-center navbar-more">
        <small>
        </small>
      </p>
    </div>
  </div>
</div>

<header>
  <div class="header" data-sections="home" data-page-id="" data-environment="prod">
    <div class="header-primary-navbar">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">
  <img id="mobile-nav-open-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" src="https://cdn-webcache.wimages.net/img/burger_menu_icon-af110d008a039e40ce09d854b03f52c6.png?vsn=d" alt="">

  <div class="visible-xs">
    <div class="whisper-logo">
      <a href="/" class="ga" data-ga-label="whisper logo clicked mobile" data-ga-category="navigation">
        <img src="/image/logo-statusfan.png" class="logo img-responsive">
      </a>
    </div>


  </div>
</div>

          <div class="col hidden-xs">
  <div class="whisper-logo">
    <a href="/" class="ga" data-ga-label="whisper logo clicked" data-ga-category="navigation">
      <img src="/image/logo-statusfan.png" alt="" class="logo img-responsive">
    </a>
  </div>
</div>

          <div class="col">
            <div class="whisper-search">
              <form class="search-form ga ga-form" action="{{ url('cari') }}" method="get" data-ga-label="search bar" data-ga-category="search">
                <i class="fa fa-search"></i>
                <i class="fa fa-close"></i>
                <input autocomplete="off" type="text" name="q" id="" value="" placeholder="Temukan disini.." class="search-text" data-ga-category="search">
                <div class="search-autocomplete">
                  <p>
                    <strong>Search For Something!</strong>
                    <br>
                    No seriously, do it!
                  </p>
                </div>
              </form>
            </div>
          </div>

          <div class="col hidden-xs">
            <div class="whisper-app-button">
              @if (Auth::guest())
              <a class="get-app-button ga" data-ga-category="download" data-ga-label="get app button desktop" href="{{ url('/login') }}">Kirim Cerita</a>
              @else
              <a class="get-app-button ga" data-ga-category="download" data-ga-label="get app button desktop" href="{{ route('kirim.cerita') }}">Kirim Cerita</a>
              @endif
            </div>
          </div>

          <div class="col whisper-more-outer hidden-xs">
            <div class="whisper-more-button ga" data-ga-label="ellipses clicked" data-ga-category="navigation">
              <a id="ellipsis_button" href="#">
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
              </a>
            </div>

            <div class="whisper-more-container hidden-xs" style="display: none;">
              <i class="fa fa-caret-up whisper-more-caret hidden-xs"></i>
              <ul class="whisper-more-nav hidden-xs">
                @if (Auth::guest())
                <li><a href="{{ url('/register') }}" class="ga" data-ga-label="jobs page clicked" data-ga-category="navigation">Register</a></li>
                @else
                <li><a href="{{ url('sahabat', auth()->user()->name) }}" class="ga" data-ga-label="jobs page clicked" data-ga-category="navigation">Profile</a></li>

                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" class="ga" data-ga-label="jobs page clicked" data-ga-category="navigation">Logout</a></li>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @endif
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

<div id="space-saver-feed-category-nav-bar">
<div id="feed-category-nav-bar">
  <div class="container" id="feed-category-container">
    <div id="feed-category-sections">
      <div id="category-initial-space"></div>

        <h5 class="feed-category-nav-section selected-feed-category ga" data-ga-label="category nav bar 1 Popular" data-ga-category="navigation">
          <a href="/">
          Popular
          <div class="selected-bar"></div>
          </a>
        </h5>

        @foreach ($list as $catlist)
        <h5 class="feed-category-nav-section ga" data-ga-label="category nav bar 10 Español" data-ga-category="navigation">
          <a href="/kategori/{{ $catlist->id }}">
          {{ $catlist->title }}
          </a>
        </h5>
        @endforeach

      <div class="feed-category-shadow"></div>
    </div>
  </div>
</div>


</div></header>

    <div id="app">
        @yield('content')
    </div>

    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/js/website-scripts.min.js" type="text/javascript"></script>
    <script src="/js/app_coffe.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js" type="text/javascript" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.dotdotdot/1.7.4/jquery.dotdotdot.js" type="text/javascript" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.5/clipboard.min.js" defer></script>

    <script type="text/javascript" async="async" src="https://widgets.outbrain.com/outbrain.js" defer></script>

</body>
</html>
