

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
            <h1 class="h3 mb-0 text-gray-800">Dashboard Finance</h1>  
          </div>

          <!-- Content Row -->

          <div class="row">
            <div class="col-md-3">
            <div class="card shadow bg-info " style="height:100px">
            <div class="card-body">
            <h6 class="text-white text-center font-weight-bold">Gross Profit Margin</h6>
            <h4 class="font-weight-bold text-center text-white">84 %</h4>
            </div>
            </div>
            </div>

            <div class="col-md-3">
            <div class="card shadow bg-info mb-2" style="height:100px">
            <div class="card-body ">
            <h6 class="text-white text-center font-weight-bold">Opex Ratio</h6>
            <h4 class="font-weight-bold text-center text-white">62 %</h4>
            </div>
            </div>
            </div>

            <div class="col-md-3">
            <div class="card shadow bg-info mb-2" style="height:100px">
            <div class="card-body ">
            <h6 class="text-white text-center font-weight-bold">Ebit Marhgin</h6>
            <h4 class="font-weight-bold text-center text-white">84 %</h4>
            </div>
            </div>
            </div>

            <div class="col-md-3">
            <div class="card shadow bg-info mb-2" style="height:100px">
            <div class="card-body ">
            <h6 class="text-white text-center font-weight-bold">Net Profit Margin</h6>
            <h4 class="font-weight-bold text-center text-white">12 %</h4>
            </div>
            </div>
            </div>
            <!-- /row -->
            </div>

            <div class="row">
            <!-- col pertama -->
            <div class="col-xl-8">
            <!-- buat card baru -->

          

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"style="background: linear-gradient(to right, #1a1aff, #ec38bc);">
                <h6 class="m-0 font-weight-bold text-white">Oprasional Expenses</h6>
                    </div>
                    <div class="card shadow mb-3">
                <div class="card-body">
                <div class="container p-3">
                <canvas id ="Revenuehal25" ></canvas>
                </div>
                </div>
            </div>

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"style="background: linear-gradient(to right, #1a1aff, #ec38bc);">
                <h6 class="m-0 font-weight-bold text-white">Earning before interest and Taxes</h6>
                    </div>
              <div class="card shadow mb-3">
                <div class="card-body">
                <div class="container p-3">
                <canvas id ="EarningTax" ></canvas>
                </div>
                </div>
            </div>
            </div>
            <!-- col kedua -->
            <div class="col-xl-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"style="background: linear-gradient(to right, #1a1aff, #ec38bc);">
                <h6 class="m-0 font-weight-bold text-white">Income Statement</h6>
                    </div>
            <div class="card shadow">
            <div class="card-body">
            <h5 class="font-weight-bold text-dark text-left"> 
            Revenue
            </h5>
        
            <h5 class="font-weight-bold text-dark text-left"> 
            COGS
            </h5>
            <hr>
            <h5 class="font-weight-bold text-dark text-left"> 
            Gross Profit
            </h5>
            <h5 class="font-weight-bold text-dark text-left"> 
            Opex
            </h5>
           <div class="container">
           <h6 class="font-weight-bold">Sales</h6>
           </div>
           <div class="container">
           <h6 class="font-weight-bold">Marketing</h6>
           </div>
           <div class="container">
           <h6 class="font-weight-bold">IT</h6>
           </div>
           <div class="container">
           <h6 class="font-weight-bold">General & Admin</h6>
           </div>
           <h5 class="font-weight-bold text-dark text-left"> 
            Other Income
            </h5>
            <h5 class="font-weight-bold text-dark text-left"> 
            Other Expenses
            </h5>
            <hr>
            <h5 class="font-weight-bold text-dark text-left"> 
            EBIT
            </h5>
            <h5 class="font-weight-bold text-dark text-left"> 
            Interest & Tax
            </h5>
            <hr>
            <h5 class="font-weight-bold text-dark text-left"> 
            NET PROFIT
            </h5>

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
<?php
include "View/footer.php";

?>
      <!-- Logout Modal-->
          </body>

    </html>
    
  <?php 
  include "Plugin.php";
  ?>