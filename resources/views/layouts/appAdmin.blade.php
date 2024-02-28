<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('titre')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vendor.bundle.addons.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">

   {{-- navbarAdmin --}}
 

   @include('include.navbarHorizontal')

 @include('include.navbarVertical')
  
  
  {{-- fin navbarAdmin --}}
   
      <div class="main-panel">
        <div class="content-wrapper">

            {{-- contenu --}}
            @yield('contenu')
            {{-- fin du contenu --}}
          

          
        </div>
        <!-- content-wrapper ends -->
        {{-- footerAdmin --}}
        @include('include.footerAdmin')
        {{-- fin footerAdmin --}}
    </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/data-table.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>
