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
            <h1 class="h3 mb-0 text-gray-800">KPI Warehouse</h1>  
          </div>

          <!-- Content Row -->
      
<div class="row">
    <div class="col-xl-12">
        <div class="card shadow mb-4">
<?php 
include 'Maps.php';
?>
</div>
</div>
</div>
         <!-- Content Chart Warehouse -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card shadow mb-4"style="height:400px;">
            <div class="card-header d-flex bg-danger flex-row text-center align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-white ">Warehouse Operating Cost</h6>    
              </div>

              <div class="bg-light" style="height:100px;">
                <div class="container p-3">
                    <h2 class="font-weight-bold text-dark"> $296.566</h2>
                    <h6>avg Monthly cost</h6>
                </div>
            </div>
          
            <!-- chart body -->
            <div class="card-body">
                <canvas id ="WarehouseOPeratingCost" style="position: relative; height:40vh; width:40vw"></canvas>
            </div>

        </div>
        </div>
        <!-- Baris 1 kolom ke 2 -->
        <div class="col-xl-6">
            <div class="card shadow mb-4"style="height:400px;">
            <div class="card-header d-flex bg-danger flex-row text-center align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-white ">Perfect Order Rate</h6>    
              </div>

              <div class="bg-light" style="height:100px;">
                <div class="container p-3">
                    <h2 class="font-weight-bold text-dark">95.8%</h2>
                    <h6>avg Monthly Rate</h6>
                </div>
            </div>
           
                <!-- chart body -->
                    <div class="card-body container">
                <canvas id ="PerfectOrderRateNew" style="position: relative; height:40vh; width:40vw"></canvas>
            </div>
        </div>
        </div>
    </div>

<!-- Baris ke 2 -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card shadow mb-4"style="height:400px;">
            <div class="card-header d-flex bg-danger flex-row text-center align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-white ">Total Shipment By Country</h6>    
              </div>
                <!-- chart body -->
            <div class="card-body">
                <canvas id ="linebanyak" style="position: relative; height:550vh; width:400vw"></canvas>
            </div>
          <!-- isi Chart -->

        </div>
        </div>
        <!-- Baris 1 kolom ke 2 -->
        <div class="col-xl-6">
            <div class="card shadow mb-4"style="height:400px;">
            <div class="card-header d-flex bg-danger flex-row text-center align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-white ">On-Time Shipment</h6>    
              </div>
              <div class="card-body">
                <canvas id ="ON_Time_Shipment" style="position: relative; height:50vh; width:40vw"></canvas>
            </div>
            <!-- isi Chart  -->

        </div>
        </div>


    </div>

    <div class="row">
        <div class="col-xl-4">
            <div class="card shadow "style="height:350px">
            <div class="bg-light" style="height:250px;">
                <!-- chart Gauge -->
                <div class="chart-body">
                    <canvas id="ChartGauge"></canvas>
                    <h1 class="text-center p-3">95%</h1>
                 
                </div>
            </div>

            <div class="p-3">
                <div class="row">
            <div class="col-xl-6">
                <h6 class="text-dark font-weight-bold text-right">Total Fleet</h6>   
                <h6 class="text-dark font-weight-bold text-right">On the Move</h6>  
                <h6 class="text-dark font-weight-bold text-right">In mantanance</h6>   
            </div>
            <div class="col-xl-6">
                <h6 class="text-center text-dark font-weight-bold">63</h6>
                <h6 class="text-center text-dark font-weight-bold">60</h6>
                <h6 class="text-center text-dark font-weight-bold">3</h6>
            </div>
            
            </div>
            </div>
        </div>
        </div>

        <!-- baris 1 kol 2 -->
        <div class="col-xl-4">
            <div class="card shadow "style="height:350px">
            <div class="bg-light" style="height:250px;">
                <!-- chart Donuts -->
                <h3 class="text-center font-weigth-bold text-dark p-3">Delivery Status</h3>
                <div class="chart-body">
                    <canvas id="DeliveryStatus"></canvas>
                </div>
                
                
            </div>

            <div class="p-3">
                <div class="row">
            <div class="col-xl-6">
                <h6 class="text-dark font-weight-bold text-right">Whitin Time limit</h6>   
                <h6 class="text-dark font-weight-bold text-right">Out of Time Limit</h6>  
              
            </div>
            <div class="col-xl-6">
                <h6 class="text-center text-dark font-weight-bold">863</h6>
                <h6 class="text-center text-dark font-weight-bold">60</h6>
          
            </div>
            
            </div>
            </div>
        </div>
        </div>

        <!-- baris 1 kolom ke 3 -->
        <div class="col-xl-4">
            <div class="card shadow mb-4 "style="height:350px">
            <div class="bg-light" style="height:250px;">
                <!-- chart pie -->
                <h1 class="text-center text-dark font-weight-bold p-3">Delivery by Destination</h1>
                <canvas id="DeliveriesbyDestination"></canvas>
            </div>

            <div class="p-3">
                <div class="row">
            
       
            </div>
            </div>
        </div>
        </div>

<!-- tutup row  -->
    </div>

    <div class="row">
        <div class="col-xl-3">
            <div class="card shadow"style="height:300px;">
            <div class="col">
              <h3  class=" pt-3 font-weight-bold text-center text-warning" >23 Min</h3>
              <h6 class="font-weight-bold text-center text-dark">Avg Loading Time</h6>
            </div>
            <div class="col">
              <h3  class=" pt-3 font-weight-bold text-center text-warning" >10 Tons</h3>
              <h6 class="font-weight-bold text-center text-dark">Avg Loading Weight</h6>
            </div>
            
</div>
</div>
<div class="col-xl-9">
            <div class="card shadow">
                <div class="card-body">
                <canvas id ="loading"style="position: relative; height:300vh; width:400vw"></canvas>
                    <!-- chart bar -->
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