

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
            <h1 class="h3 mb-0 text-gray-800">Human Resource Dashboad</h1>  
          </div>

          <!-- Content Row -->
         

<div class= "row ">
<div class= "col-xl-12">
      <div class="card bg-white mb-4">
      <div class="card-header py-3 d-flex bg-gradient-dark flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-white">Ole Over The Last 5 Years</h6>          
      </div>
      <!-- content -->
      <div class="container">
           <div class="row">
             <div class="col">
               <div id ="POR" style= "width:auto; height:400px;"  ></div>
                 </div>
                    <div class="col">
                   <div class="card col-12 bg-gradient-danger ">
                  <h3 class="m-0 font-weight-bold text-white"> Congratulations Your Target of 92.5% </h3>
                </div>
           <div id ="POR1" style= "width:auto; height:400px;" ></div>
           </div>
           </div>
           </div>
      </div>
</div>
</div>

<div class= "row ">
<div class= "col-xl-4">
      <div class="card bg-white mb-4">
      <div class="card-header  d-flex bg-gradient-dark flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-white">Absen Rate Over Last 5 Years</h6>          
      </div>
      <!-- content -->

      
           
           <div class="col">
           <canvas id ="hal15" style= "width:auto; height:400px;"  ></canvas>
           </div>
           <div class="col">
           <canvas id ="chartpie1" ></canvas>
           </div>
           
          
     
     </div>
</div>


<div class= "col-xl-4">
      <div class="card bg-white mb-4">
      <div class="card-header  d-flex bg-gradient-dark flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-white">Female to Male Ratio</h6>          
      </div>
      <!-- content -->
  
      <div class="col p-3">
           <canvas id ="partime" style= "width:auto; height:400px;"  ></canvas>
           </div>
           <div class="col">
           <canvas id ="ChartAverage" ></canvas>
           </div>           
     </div>
</div>


<div class= "col-xl-4">
  <div class="card bg-white mb-4">
    <div class="card-header  d-flex bg-gradient-dark flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-white">Time to Quit Job</h6>          
      </div>
      <!-- content -->

      <div class="col p-3">
           <canvas id ="TTQJ" style= "width:auto; height:370px;"  ></canvas>
           </div>
           <div class="col">
           <canvas id ="chartpie2" ></canvas>
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