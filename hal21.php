

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
<div class="col-xl-8" >

<!-- row sub -->
<div class="row">

<!-- buka kolom -->


<!-- kolom ke -->

<div class="col-sm-12 pt-3 ">
<div class="card shadow mb-3" style="height:450px;">
                <div class="card-body">
                <div class="container p-3">
                <canvas id ="ChartAcquistionCostvsAveragehal21.js"style="position: relative; height:60vh; width:100vw" ></canvas>
                </div>
                </div>
            

</div>
</div>

<!-- tutup row sub -->


</div>
</div>

<div class="col-xl-4">



<div class="col pt-3">
<div class="card shadow mb-2 ">
<div class ="row">
<div class="col-sm-4">
<div class="container p-4">
<h1 class="text-right"><i class="far fa-clock"></i></h1>
</div>
</div>
<div class="col-sm-8">
<div class="pt-4">
<h3 class="font-weight-bold text-info">18, 8 Month</h3>
<h6 class="font-weight-bold text-dark">Avg Costumer Lifetime</h6>
</div>
</div>
</div>

</div>
</div>

<div class="col">
<div class="card shadow mb-2   ">

<div class ="row">
<div class="col-sm-4">
<div class="container p-4">
<h1 class="text-right"><i class="fas fa-money-bill-wave-alt text-success"></i></h1>
</div>
</div>
<div class="col-sm-8">
<div class="pt-4">
<h3 class="font-weight-bold text-info">$ 440</h3>
<h6 class="font-weight-bold text-dark">Avg Costumer Lifetime Value</h6>
</div>
</div>
</div>


</div>
</div>


<div class="col">
<div class="card shadow mb-2   ">

<div class ="row">
<div class="col-sm-4">
<div class="container p-4">
<h1 class="text-right"><i class="fas fa-money-bill-wave-alt text-info"></i></h1>
</div>
</div>
<div class="col-sm-8">
<div class="pt-4">
<h3 class="font-weight-bold text-info">$ 524</h3>
<h6 class="font-weight-bold text-dark">Avg Revenue Per User</h6>
</div>
</div>
</div>


</div>
</div>

<!-- kolom ke 4 -->

<div class="col">
<div class="card shadow mb-2   ">

<div class ="row">
<div class="col-sm-4">
<div class="container p-4">
<h1 class="text-right"><i class="fas fa-money-bill-wave-alt"></i></h1>
</div>
</div>
<div class="col-sm-8">
<div class="pt-4">
<h3 class="font-weight-bold text-dark">$ 161</h3>
<h6 class="font-weight-bold text-dark">Customer Acquisition Cost</h6>
</div>
</div>
</div>


</div>
</div>





</div>



</div>

<!-- Baris Ke 2 -->
<div class="row">
        <div class="col-xl-12">
        <div class="card shadow mb-3">
                <div class="card-body">
                <div class="container p-3">
                <canvas id ="LineAverage"style="position: relative; height:50vh; width:100vw" ></canvas>
                </div>
                </div>
            </div>

        </div>
        </div>
<div class="row">

<div class="col-xl-6">
<div class="card mb-4 shadow" style="">
<div class="p-3">
<h3 class="font-weight-bold text-center text-info">Opurtunity</h3>
<h5 class="font-weight-bold text-center text-dark">3,2 days on Average</h5>

</div>
</div>



<div class="col card mb-4  shadow"  style="">
<div class="p-3">
<h3 class="font-weight-bold text-center text-danger">Proposal</h3>
<h5 class="font-weight-bold text-center text-dark">3,9 days on Average</h5>

</div>

</div>
<div class="col card mb-4  shadow" style="">
<div class="p-3">
<h3 class="font-weight-bold text-center text-warning">Negotiation </h3>
<h5 class="font-weight-bold text-center text-dark">2 days on Average</h5>

</div>

</div>
<div class="col card mb-4 shadow"  style="100px;">
<div class="p-3">
<h3 class="font-weight-bold text-center text-dark">Closing</h3>
<h5 class="font-weight-bold text-center text-dark">4,2 days on Average</h5>

</div>
</div>

<div class="col card mb-4 shadow"  style="100px;">
<div class="p-3">
<h3 class="font-weight-bold text-center text-dark">Leads</h3>
<h5 class="font-weight-bold text-center text-dark">2.285</h5>

</div>
</div>


<div class="col card mb-4 shadow"  style="100px;">
<div class="p-3">
<h3 class="font-weight-bold text-center text-dark">Opurtunities</h3>
<h5 class="font-weight-bold text-center text-dark">457</h5>

</div>
</div>


<div class="col card mb-4 shadow"  style="">
<div class="p-3">
<div class="row">

<div class="col-sm-6">
<h3 class="font-weight-bold text-left text-dark">Lead to Opurtunity</h3>
<h1 class="font-weight-bold text-left text-dark">5:1</h1>
<h6 class="text-left text-dark">Unqualified Leads turned into qualified Leads</h6>
</div>

<div class="col-sm-6">
<div class="card">
<div class="container">
<canvas id="donatku"></canvas>
</div>
</div>
</div>

</div>
</div>
</div>


</div>

<div class="col-xl-6">
<div class="card shadow mb-2 "style="">
<div class="p-3">

<h3 class="font-weight-bold text-center text-info">Average Length of Sales Stages</h3>
<hr>

<div class="col-xl-8 ">
<div class="card bg-info" style="width:150px; height:80px;">
<h5 class="text-white pt-4 text-center font-weight-bold ">17%</h5>
</div>
<div class="card bg-danger" style="width:150px; height:80px;">
<h5 class="text-white pt-4 text-center font-weight-bold ">21%</h5>
</div>
<div class="card bg-warning" style="width:150px; height:80px;">
<h5 class="text-white pt-4 text-center font-weight-bold ">17%</h5>
</div>

<div class="card bg-dark" style="width:150px; height:80px;">
<h5 class="text-white pt-4 text-center font-weight-bold ">17%</h5>
</div>
</div>

</div>
</div>




<div class="col card mb-4 shadow"  style="100px;">
<div class="p-3">
<h3 class="font-weight-bold text-center text-dark">ANNA Sales Rep 1</h3>
<h5 class="font-weight-bold text-center text-info">31%</h5>
</div>
</div>

<div class="col card mb-4 shadow"  style="100px;">
<div class="p-3">
<h3 class="font-weight-bold text-center text-dark">MAX Sales Rep 1</h3>
<h5 class="font-weight-bold text-center text-info">31%</h5>
</div>
</div>

<div class="col card mb-4 shadow"  style="100px;">
<div class="p-3">
<h3 class="font-weight-bold text-center text-dark">DAN Sales Rep 1</h3>
<h5 class="font-weight-bold text-center text-info">31%</h5>
</div>
</div>

<div class="col card mb-4 shadow"  style="300px;">
<div class="p-3">
<div class="container">
<h6 class="text-center font-weight-bold text-dark"></h6>
<canvas id="ChartGaugehal21"style="position: relative; height:50vh; width:100vw">
</div>
</div>

</div>
</div>

</div>



</div>
</div>
</div>


<!-- tutup baris pertama -->



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
  