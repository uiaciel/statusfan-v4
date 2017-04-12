<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>


<header style="left: 0px; position: static;">
  <div class="header" data-sections="home" data-page-id="" data-environment="prod">
    <div class="header-primary-navbar">
      <div class="container">
        <nav class="navbar">
          <div class="navbar-header">

  <div class="visible-xs">
    <div class="whisper-logo">
      <a href="/" class="ga" data-ga-label="whisper logo clicked mobile" data-ga-category="navigation">
        <img src="/image/logo-statusfan.png" class="logo img-responsive">
      </a>
    </div>

    <div class="whisper-app-button">
      <a class="get-app-button ga" data-ga-category="download" data-ga-label="get the app button clicked" href="http://br.wis.pr/download">Buat Akun</a>
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



          <div class="col hidden-xs">
            <div class="whisper-app-button">
              <a class="get-app-button ga" data-ga-category="download" data-ga-label="get app button desktop" href="{{ url('/register') }}">Buat Akun</a>
            </div>
          </div>




          </div>
        </nav>
      </div>
    </div>
  </div>

      </header>



    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/style.js"></script>
    <script src="/js/jquery.dotdotdot.js"></script>
    <script src="/js/app_coffee.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js" type="text/javascript" defer=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js" defer=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.dotdotdot/1.7.4/jquery.dotdotdot.js" type="text/javascript" defer=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.5/clipboard.min.js" defer=""></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script>
$('sidebar-image-container').each(function(){
	contentWidth = $(this).width();
	if(contentWidth < $(this).data('small-width')) theSource = $(this).data('small');
	else if (contentWidth < $(this).data('medium-width')) theSource = $(this).data('medium');
	else theSource = $(this).data('large');
	altText = $(this).data('alt');
	$(this).append('<img src="'+theSource+'" alt="'+altText+'">');

});
</script>
</body>
</html>
