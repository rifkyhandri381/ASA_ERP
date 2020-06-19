

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
            <h1 class="h3 mb-0 text-gray-800">Sales and Marketing Management System</h1>  
          </div>

          <!-- Content Row -->

          <div class="row">
        <div class="col-xl-12">
        <div class="card container p-2 mb-4">
        
        <div class="card-header mb-2  d-flex flex-row align-items-center justify-content-between" style=" background: linear-gradient(to right, orange, #ec38bc, #7303c0, cyan);  ">
         <h6 class="m-0 font-weight-bold text-white">Revenue Per Sales REP</h6>         
        </div>
      
        <div class="row">
        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px; background: linear-gradient(to right, orange, #ec38bc);">
        <!-- isi -->
        <div class="row">
        <div class="col-sm-4">
        <div class="p-4 ">
        <h1><i class="fas fa-user text-white"></i></h1>
        </div>
        </div>
        <div class="col-sm-8">
        <div class="p-3">
        <h5 class="font-weight-bold text-white">AVG Reveue PerSales REP</h5>
        </div>
        </div>
        </div>
        <!-- //tutup isi -->
        </div>
        </div>
        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px; background: linear-gradient(to right, orange, #ec38bc);">

    <!-- isi -->
    <div class="row">
        <div class="col-sm-4">
        <div class="p-4 ">
        <h1><i class="fas fa-theater-masks text-white"></i></h1>
        </div>
        </div>
        <div class="col-sm-8">
        <div class="p-3">
        <h5 class="font-weight-bold text-white">Target PerSales REP</h5>
        </div>
        </div>
        </div>
        <!-- //tutup isi -->

        </div>
        </div>
        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px; background: linear-gradient(to right, orange, #ec38bc);">
        
    <!-- isi -->
    <div class="row">
        <div class="col-sm-4">
        <div class="p-4 ">
        <h1><i class="fas fa-calendar-alt text-white"></i></h1>
        </div>
        </div>
        <div class="col-sm-8">
        <div class="p-3">
        <h5 class="font-weight-bold text-white">TO Previous Periode</h5>
        </div>
        </div>
        </div>
        <!-- //tutup isi -->

        </div>
        </div>        

        <!-- tutup row card -->
        </div>


            <!-- buat baris baru  -->
        <div class="row">

        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px">
        <div class=" pt-4">
        <h1 class="font-weight-bold text-center text-info"> $ 30,000</h1>
        </div>
        </div>
        </div>

        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px">
        <div class=" pt-4">
        <h1 class="font-weight-bold text-center text-info"> $ 30,000</h1>
        </div>
        </div>
        </div>

        <!-- sub 3 -->
           <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px">
        <div class=" pt-4">
        <h1 class="font-weight-bold text-center text-danger"> $ 30,000</h1>
        </div>
        </div>
        </div>
        <!-- tutup baris ke 1 -->
     </div>

        <!-- buat baris ke 2/Chart -->
        <div class="row">
        <div class="col-xl-12">
        <div class="card shadow mb-3">
                <div class="card-body">
                <div class="container p-3">
                <canvas id ="linebanyak" ></canvas>
                </div>
                </div>
            </div>

        </div>
        </div>
        </div>
        </div>
        </div>

        
<!-- two -->

<div class="row">
        <div class="col-xl-12">
        <div class="card container p-2 mb-4">
        
        <div class="card-header mb-2  d-flex bg-info flex-row align-items-center justify-content-between" style=" background: linear-gradient(to right, orange, #ec38bc, #7303c0, cyan);  ">
         <h6 class="m-0 font-weight-bold text-white">Profit Margin PerSales Rep</h6>         
        </div>
      
        <div class="row">
        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px; background: linear-gradient(to right, orange, #ec38bc);">
          <!-- isi -->
          <div class="row">
        <div class="col-sm-4">
        <div class="p-4 ">
        <h1><i class="fas fa-user text-white"></i></h1>
        </div>
        </div>
        <div class="col-sm-8">
        <div class="p-3">
        <h4 class="font-weight-bold text-white">PROFIT MARGIN PER SALES</h4>
        </div>
        </div>
        </div>
        <!-- //tutup isi -->
      
        </div>
        </div>
        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px; background: linear-gradient(to right, orange, #ec38bc);">
        
          <!-- isi -->
          <div class="row">
        <div class="col-sm-4">
        <div class="p-4 ">
        <h1><i class="fas fa-theater-masks text-white"></i></h1>
        </div>
        </div>
        <div class="col-sm-8">
        <div class="p-3">
        <h4 class="font-weight-bold text-white">TARGET PER SALES REP</h4>
        </div>
        </div>
        </div>
        <!-- //tutup isi -->
      

        </div>
        </div>
        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px;background: linear-gradient(to right, orange, #ec38bc);">
        
  <!-- isi -->
  <div class="row">
        <div class="col-sm-4">
        <div class="p-4 ">
        <h1><i class="fas fa-calendar-alt text-white"></i></h1>
        </div>
        </div>
        <div class="col-sm-8">
        <div class="p-3">
        <h4 class="font-weight-bold text-white">TO PREVIOUSE PERIOD</h4>
        </div>
        </div>
        </div>
        <!-- //tutup isi -->
      

        </div>
        </div>


        </div>

        <div class="row">

<div class="col-xl-4 mb-4">
<div class="card shadow " style="height:100px">
<div class=" pt-4">
<h1 class="font-weight-bold text-center text-info">26 %</h1>
</div>
</div>
</div>

<div class="col-xl-4 mb-4">
<div class="card shadow " style="height:100px">
<div class=" pt-4">
<h1 class="font-weight-bold text-center text-info"> 35 %</h1>
</div>
</div>
</div>

<!-- sub 3 -->
   <div class="col-xl-4 mb-4">
<div class="card shadow " style="height:100px">
<div class=" pt-4">
<h1 class="font-weight-bold text-center text-danger"> 3 %</h1>
</div>
</div>
</div>
<!-- tutup baris ke 1 -->
</div>

        <div class="row">
        <div class="col-xl-12">
        <div class="card shadow mb-3">
                <div class="card-body">
                <div class="container p-3">
                <canvas id ="linebanyak1" ></canvas>
                </div>
                </div>
            </div>

        </div>
        </div>
        </div>
        </div>
        </div>

        <!-- row three -->
        
        <div class="row">
        <div class="col-xl-12">
        <div class="card container p-2 mb-4">
        
        <div class="card-header mb-2  d-flex bg-info flex-row align-items-center justify-content-between" style=" background: linear-gradient(to right, orange, #ec38bc, #7303c0, cyan);  ">
         <h6 class="m-0 font-weight-bold text-white">Customer Churn Rate</h6>         
        </div>
      
        <div class="row">
        <div class="col-xl-12">
        <div class="card shadow mb-3">
                <div class="card-body">
                <div class="container p-3">
                <canvas id ="linebanyak2" ></canvas>
                </div>
                </div>
            </div>

        </div>
        </div>
        
        <div class="row">
        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px;  background: linear-gradient(to right, orange, #ec38bc, #7303c0);">
     
        <div class="pt-3">      
        <h5 class="text-center font-weight-bold text-white">Churn Rate</h5>
        <h2 class="text-center font-weight-bold text-white">2.01%</h2>
        </div>
       
        </div>
        </div>
        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px; height:100px;  background: linear-gradient(to right, orange, #ec38bc, #7303c0);">
        <div class="pt-3">      
        <h5 class="text-center font-weight-bold text-white">Chustomer Lost</h5>
        <h2 class="text-center font-weight-bold text-white">33</h2>
        </div>
     
        </div>
        </div>
        <div class="col-xl-4 mb-4">
        <div class="card shadow " style="height:100px;  background: linear-gradient(to right, orange, #ec38bc, #7303c0);">
        <div class="pt-3">      
        <h5 class="text-center font-weight-bold text-white">Revenue Lost</h5>
        <h2 class="text-center font-weight-bold text-white">$54.435</h2>
        </div>
     
        </div>
        </div>        
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