<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema-farmacia</title>

    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/flat-icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <!-- Medboard styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/morris.css') }}" rel="stylesheet">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
    <!-- Main Content -->
    <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
        <i class="flaticon-gear"></i>
    </div>
    <!--div class="ms-settings-panel ms-d-block-lg">
        <div class="row">
          <div class="col-xl-4 col-md-4">
            <h4 class="section-title">Customize</h4>
            <div>
              <label class="ms-switch">
                <input type="checkbox" id="dark-mode">
                <span class="ms-switch-slider round"></span>
              </label>
              <span> Dark Mode </span>
            </div>
    
          </div>
          <div class="col-xl-4 col-md-4">
            <h4 class="section-title">Keyboard Shortcuts</h4>
            <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
            <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
            <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>
          </div>
        </div>
      </div-->
    <!-- Preloader -->
    <div id="preloader-wrap">
        <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
        </div>
    </div>
    @component('dashboard.layout.parts.navigation-bar')
    @endcomponent
 <!-- Main Content -->
 <main class="body-content">
    <!-- Navigation Bar -->
    @component('dashboard.layout.parts.navigation')
    @endcomponent
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
    @yield('content')
    </div>
  </main>

    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start-->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.js') }}"> </script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"> </script>
    <!-- Global Required Scripts End -->
    <!-- Medboard core JavaScript -->
    <script src="{{ asset('js/framework.js') }}"></script>
</body>

</html>