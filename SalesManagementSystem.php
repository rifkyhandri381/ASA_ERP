

            <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> ASA ERP </title>
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
<script src="vendors/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/babel.css" type="text">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <script src="jquery.min.js"></script>
    <script src="vendors/Chart.js/dist/Chart.bundle.js"></script>
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <script src="vendors/Chart.js/dist/Chart.bundle.js"></script>
    <script src="utils.js"></script>
    <script src="echarts.min.js"></script>
  
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
            <h1 class="h3 mb-0 text-gray-800">Sales KPI Dashboard</h1>  
          </div>

          <!-- Content Row -->
       
        <div class="row">
      




      
        <!-- Revenue -->
        <div class="col-sm-3">
        <div class="card shadow mb-4">
        <div class="card-header  d-flex bg-info flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-white">Number Of Sales</h6>         
      
        </div>
        <div class="card-body">
        <h3 class="text-success font-weight-bold text-center">$115</h3>
        <div class="row">
        <div class="col bg-light">
        <h6 class="m-0 font-weight-bold text-danger text-center"><i class="fas fa-bullseye text-success"></i> 4%</h3>
        
        </div>
        <div class="col bg-light">
        <h6 class="m-0 font-weight-bold text-danger text-center"><i class="fas fa-calendar-day text-success "></i> 10%</h3>
        </div>
        </div>
        </div>
        </div>

        </div>
        
        <!-- number of sales -->
        <div class="col-sm-3">
        <div class="card shadow mb-4">
        <div class="card-header  d-flex bg-info flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-white">REVENUE</h6>         
      
        </div>
        <div class="card-body">
        <h3 class="text-success font-weight-bold text-center">$150.000</h3>
        <div class="row">
        <div class="col bg-light">
        <h6 class="m-0 font-weight-bold text-danger text-center"><i class="fas fa-bullseye text-success"></i><span></span> 4%</h3>
        
        </div>
        <div class="col bg-light">
        <h6 class="m-0 font-weight-bold text-danger text-center"><i class="fas fa-calendar-day text-success "></i> 10%</h3>
        </div>
        </div>
        </div>
        </div>

        </div>
        
        
        
        <!-- provit -->
        <div class="col-sm-3">
        <div class="card shadow mb-4">
        <div class="card-header  d-flex bg-info flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-white">PROVIT</h6>         
      
        </div>
        <div class="card-body">
        <h3 class="text-success font-weight-bold text-center">$39.000</h3>
        <div class="row">
        <div class="col bg-light">
        <h6 class="m-0 font-weight-bold text-danger text-center"><i class="fas fa-bullseye text-success"></i> 4%</h3>
        
        </div>
        <div class="col bg-light">
        <h6 class="m-0 font-weight-bold text-danger text-center"><i class="fas fa-calendar-day text-success "></i> 10%</h3>
        </div>
        </div>
        </div>
        </div>

        </div>
        


        <!--  -->
        <div class="col-sm-3">
        <div class="card shadow mb-4">
        <div class="card-header  d-flex bg-info flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-white">COST</h6>         
      
        </div>
        <div class="card-body">
        <h3 class="text-success font-weight-bold text-center">$150.000</h3>
        <div class="row">
        <div class="col bg-light">
        <h6 class="m-0 font-weight-bold text-danger text-center"><i class="fas fa-bullseye"></i> 4%</h3>
        
        </div>
        <div class="col bg-light">
        <h6 class="m-0 font-weight-bold text-success text-center"><i class="fas fa-calendar-day "></i> 10%</h3>
        </div>
        </div>
        </div>
        </div>

        </div>
        
        <!-- /row -->
        </div>
      
        <div class="row">
        <div class="col-xl-7">
        <div class="card shadow mb-4">
        <div class="card-header  d-flex bg-info flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-white">Sales Revenue</h6>         
      </div>
      <div class="card-body">
            <canvas id="SKDSalesRevenue">
      
      </canvas>
      </div>

      </div>
      <div class="row">
      <div class="col-xl-5">
      <div class="card shadow mb-4">
        <div class="card-header  d-flex bg-info flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-white">Up/Cross Sell</h6>  
      </div>
      <div class="card-body">
      <div class="col-xl-12">
      <h5>Revenue : <span>$16000</span></h5> 
      <h5>% of Revenue : <span>11%</span></h5> 
      
      </div>
      </div>
 <div class="card-header  d-flex bg-info flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-white">CHURN</h6>  
      </div>      
      <div class="card-body">
      <div class="col-xl-12">
      <h5>Total <span>26</span></h5> 
      <h5>Rate <span>2%</span></h5>
      <h5>Revenue <span>$43.812</span></h5> 
      
      </div>
      </div>

      </div>
     </div>

     <div class="col-xl-7">
      <div class="card shadow mb-4" style="height:320px;">
        <div class="card-header  d-flex bg-info flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-white">Accumulated Revenue</h6>  
      </div>
      <div class="card-body">
      <canvas id="SKDAccumulatedRevenue"></canvas>
      </div>
      </div>
     </div>
    </div>
     
      </div>
      
      <div class="col-xl-5">
        <div class="card shadow mb-4" style="height:420px;">
        <div class="card-header  d-flex bg-info flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-white">Sales Revenue</h6>         
      </div>
      <div class="card-body">
      <canvas id="chartpiecost">
      </div>
      </canvas>
      </div>
      <div class="row">
      <div class="col-xl-12">
      <div class="card shadow mb-4">
        <div class="card-header  d-flex bg-info flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-white">Sales Revenue</h6>  
      </div>

      <div class="card-body">
      <canvas id = "SKDIncrementalSales">
      </canvas>
      </div>
      </div>
     </div>

     
      </div>
      </div>

      </div>

<!-- two -->


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
<?php
include "View/footer.php";

?>
      <!-- Logout Modal-->
          </body>

    </html>
    
  <?php 
  include "Plugin.php";
  ?>