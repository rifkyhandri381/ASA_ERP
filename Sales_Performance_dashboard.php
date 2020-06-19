<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> ASA ERP </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/babel.css" type="text">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

  <script src="gauge.min.js"></script>
  
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include 'View/sidebar.php';?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include 'View/topBar.php'?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sales Performance Dashboard</h1>
            
          </div>

          <!-- Content Row -->      

    <div class="row">
    <div class="col-xl-12">
    <!-- card -->
    <div class="card shadow mb-4"style="height:300px">
    <div class="row">
    <!-- kolom 1 Baris 1 -->
    <div class="col-md-3">
        <div class="card"style="height:300px;width:245px;">
        <div class="row">
        <div class="col-sm-3 ">
        <h1 class="p-3 h3 fas fa-user text-dark"></h1>
        <hr>
        <h1 class="fas fa-chart-line text-dark p-3"></h1>
        <hr>
        <h1 class="fas fa-coins text-dark p-3"></h1>
      
        </div>
        
        <div class="col-sm-9">
        <h5 class="pt-3 font-weight-bold text-dark">133</h5>
        <h6 class="h6  text-dark">New Costumer | YTD</h6>
        
        <hr>
        <h5 class="pt-3 font-weight-bold text-dark">$789.596</h5>
        <h6 class="h6  text-dark mb-4">Sales Revenue | YTD</h6>
        <hr>
        <h5 class="pt-3 font-weight-bold text-dark">$199.955</h5>
        <h6 class="h6  text-dark">Provit | YTD</h6>
        
        </div>
        </div>
        
        </div>
    </div>
    <!-- kolom 2 Baris-1 -->
    <div class="col-md-5">
    <div class="card shadow"style="height:300px;width:410px;">
    <div class="row">
    <div class="container p-3 text-center ">
    <h3 class="font-weight-bold text-dark">$54.822</h3>
    <h6 class="h6 font-weight-bold text-dark">Average Weekly Sales Revenue</h6>
    <div id="Charthal18"></div>
    </div>
    </div>
    </div>

  

    </div>
    <!-- kolom 3 baris 1 -->
    <div class="col-md-4">
    <div class="card "style="height:300px;width:350px">
    <div class="row">
    <div class="container p-3 text-center ">
    <h3 class="font-weight-bold text-dark">$363.054</h3>
    <h6 class="h6 font-weight-bold text-dark">Above Sales Target | YTD</h6>
    <canvas id="donatspd"></canvas>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-xl-12">
    <div class="card shadow "style="">
    
    <div class="row">
    <div class="col-xl-4">
    <h5 class="text-dark p-3 font-weight-bold">Average revenue perunit</h5>
    <h4 class="bg-success text-white text-center">$120</h4>
    <hr>
    <h5 class="text-dark p-3 font-weight-bold">Average revenue perunit</h5>
    <h4 class="bg-success text-white text-center">$333</h4>
    <hr>
    <h5 class="text-dark p-3 font-weight-bold">Average revenue perunit</h5>
    <h4 class="bg-success text-white text-center">$276</h4>
    
    </div>

    <div class="col-xl-4">
    <h5 class="text-dark p-3 font-weight-bold">Arpu Last 12 Month</h5>
   
    <hr>
    <h5 class="text-dark p-3 font-weight-bold">Clv last 12 month</h5>

    <hr>
    <h5 class="text-dark p-3 font-weight-bold">CAC last 12 month </h5>

    
    <!-- kolom ke 2 -->
    
    </div>
    
    </div>
    </div>
    </div>

              <!-- Approach -->
             
        </div>
        <!-- /.container-fluid -->

      </div>
     
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

    </body>

</html>
<?php
include 'Plugin.php';
?>
  <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script src="https://unpkg.com/gauge-chart@latest/dist/bundle.js"></script>
  <script
			  src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <script src="vendors/jquery-sparkline/dist/jquery.sparkline.js"></script>
      