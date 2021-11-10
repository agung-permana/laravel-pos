@include('layouts/partials.header')

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      @include('layouts/partials.navbar')
      @include('layouts/partials.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>

          <div class="section-body">
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('/stisla/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('/stisla/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('/stisla/assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('/stisla/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/stisla/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('/stisla/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('/stisla/assets/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('/stisla/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('/stisla/assets/js/custom.js') }}"></script>
</body>
</html>