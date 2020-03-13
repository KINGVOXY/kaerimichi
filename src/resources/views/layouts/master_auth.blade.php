cut icon" href="{{ url('/') }}/dist/img/favicon.ico">

<!--                 -->

<!-- なくていいファイル -->

<!--                 -->

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  @yield('styles')
</head>
<body>
@include('partials.header')
<div class="container">
  @yield('content')
</div><!-- /.container -->
 
<footer class="footer">
  <div class="container">
  <p class="text-muted">認証デモ</p>
  </div>
</footer>
 
<!-- Bootstrap core JavaScript
  ================================================== -->
<script src="{{ url('/') }}/dist/js/vendor/jquery.min.js"></script>
<script src="{{ url('/') }}/dist/js/vendor/video.js"></script>
<script src="{{ url('/') }}/dist/js/flat-ui.min.js"></script>
 
<script src="{{ url('/') }}/assets/js/prettify.js"></script>
<script src="{{ url('/') }}/assets/js/application.js"></script>
 
@yield('scripts')
</body>
</html>