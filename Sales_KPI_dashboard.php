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
            <h1 class="h3 mb-0 text-gray-800">Sales Conversion Dashboard</h1>
            
          </div>

          <!-- Content Row -->      
<div class="row">
  <div class = "col-xl-4">
    <div class ="card shadow mb-2">
      <div class="card-body" style= "background: #006666;">
        <div class="container">
          <h5 class="text-white font-weight-bold ">Lead Conversion Ratio</h5>
            <br>
          <h1  class="text-white font-weight-bold">17 : 1</h1>
        <br>
      <p class="text-white">Unqualifield leads</p>
    <p class="text-white">turned into customers</p>
   </div>  
 </div>
</div>
<div class ="card shadow mb-2">
  <div class="card-body" style= "background: #006666;">
    <div class=" row">
      <div class="col-6"> 
        <h5 class="text-white font-weight-bold"> Leads</h5>
      </div>
    <br>
<div class="col-6">
  <h3 class="text-white text-right font-weight-bold"> 2130</h3>
    </div>
      </div>
        </div>
          </div>

<div class ="card shadow mb-2">
  <div class="card-body" style= "background: #009999;">
    <div class=" row">
      <div class="col-6">
        <h5 class="text-white font-weight-bold"> Opportunities</h5>
          </div>
            <br>
<div class="col-6">
<h3 class="text-white text-right font-weight-bold"> 30</h3>
</div>
</div>
</div>
</div>

<div class ="card shadow mb-2 ">
  <div class="card-body" style= "background: #00cccc;">
    <div class=" row">
       <div class="col-6">
          <h5 class="text-white font-weight-bold"> Negotiation</h5>
            </div>
              <br>
                <div class="col-6">
              <h3 class="text-white text-right font-weight-bold"> 13</h3>
          </div>
      </div>
    </div>
  </div>

<div class ="card shadow mb-2 ">
<div class="card-body" style= "background: #00e6e6;">
<div class=" row">
<div class="col-6">

<h5 class="text-white font-weight-bold"> Proposal</h5>
</div>
<br>
<div class="col-6">
<h3 class="text-white text-right font-weight-bold"> 213</h3>
</div>
</div>
</div>
</div>

<div class ="card shadow mb-2 "style="">
<div class="card-body" style= "background: #00ffff;">
<div class=" row">
<div class="col-6">
<h5 class="text-white font-weight-bold"> Wins</h5>
</div>
<br>
<div class="col-6">
<h3 class="text-white text-right font-weight-bold"> 130</h3>
</div>
</div>
</div>
</div>
</div>  
<div class = "col-xl-8 p-0 ml-0">
  <div class ="card shadow mb-2">
    <div class="card-body container p-3">
      <div id="Chartgua"> 
    </div>
    <h1>Converted Leads - last 30 days</h1>
  </div>
</div>
<!-- kotak untuk Gauge -->
<div class="row">
  <div class="col-xl-4">
      <div class="card shadow mb-2">
      <canvas id="ChartGauge1"style="position: relative; height:200vh; width:100vw"></canvas>
      <h3 class='font-weight-bold text-center mt-0 text-dark'>34%</h3>
      <h6 class='font-weight-bold text-center bg-success mt-0 text-white'>Lead to Opportunity Ratio</h6>
               </div>
</div>
<div class="col-xl-8 mr-0 p-0">
    <div class="card shadow mb-2">
        <div class="card-body" style="height:250px;">
            <div class="row">
                <div class="col-md-6">
                     <h4>Daniel</h4>
                          <small>Sales Manager 1</small>
                          </div>
                        <div class="col-md-6">
                      <h4 class="text-right">3%</h4>
                  <h6 class="text-right">Conversion Rate</h6>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-4">
      <div class="card shadow mb-2">
          <canvas id="ChartGauge2"style="position: relative; height:200vh; width:100vw"></canvas>
          <h3 class='font-weight-bold text-center mt-0 text-dark'>34%</h3>
      <h6 class='font-weight-bold text-center bg-success mt-0 text-white'>Lead to Opportunity Ratio</h6>
      
      </div>
</div>
<div class="col-xl-8 mr-0 p-0">
    <div class="card shadow mb-2">
        <div class="card-body" style="height:250px;">
                    <div class="row">
                <div class="col-md-6">
                     <h4>Anna</h4>
                          <small>Sales Manager 2</small>
                          </div>
                        <div class="col-md-6">
                      <h4 class="text-right">13%</h4>
                  <h6 class="text-right">Conversion Rate</h6>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- kotak untuk Gauge -->


<!-- penutup row -->
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
      