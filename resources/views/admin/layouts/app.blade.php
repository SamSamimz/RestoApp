<!DOCTYPE html>
<html lang="en">

<head>
  <base href="/public">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RestoApp Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



  <!-- plugins:css -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!-- plugins:css -->
  <link rel="stylesheet" href="Admin/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="Admin/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="Admin/assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="Admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="Admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="Admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="Admin/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="Admin/assets/images/favicon.png" />


  
  <!-- Alpine js for this page -->
  <script src="//unpkg.com/alpinejs" defer></script>


  <style>
    [x-cloak] {
      display: none;
    }
  </style>

  
</head>

<body>

  @yield('admin-content')

  <!-- plugins:js -->
  <script src="Admin/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="Admin/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="Admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="Admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="Admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="Admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="Admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="Admin/assets/js/off-canvas.js"></script>
  <script src="Admin/assets/js/hoverable-collapse.js"></script>
  <script src="Admin/assets/js/misc.js"></script>
  <script src="Admin/assets/js/settings.js"></script>
  <script src="Admin/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="Admin/assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->


    
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
</body>

</html>