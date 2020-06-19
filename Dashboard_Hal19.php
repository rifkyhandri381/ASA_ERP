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
            <h1 class="h3 mb-0 text-gray-800">Hal-19</h1>
            
          </div>

          <!-- Content Row -->
      



<div class="row">



<!-- Buat Kolom col-xl-7  -->
<div class="col-xl-7">

<div class="card shadow mb-2">


<h3 class="p-2 font-weight-bold text-info text-center">18,4 Days</h3>
<h6 class='font-weight-bold text-center text-info'>Average sales cycle length</h6>
<div class='container'>
<canvas id ="LineAveragehal19"style="position: relative; height:50vh; width:90vw"></canvas>
</div>

</div>

<div class="row">
<!-- Buat sub kolom md-6  -->
<div class="col-md-6">
<div class="card shadow mb-4" style="height:580px;">
<div class="container">
<h3 class="font-weight-bold text-info text-center">Sales funnel</h3>

</div>


</div>
</div>
<!-- Buat sub kolom md-6  -->
<div class="col-md-6">
<div class="card shadow mb-4 " style="height:580px;" >
<div class="container">
  <h5 class='font-weight-bold text-info text-center'>
    Avg lenght of Sales Stages
  </h5>
  <br>
  <br>
  <br>
  <div class="p-2 border-left-danger">
  <h5 class="text-danger">Opportunity</h5>
  <p>3,2 Days</p>
  </div>
  <div class="p-2 border-left-info">
  <h5 class="text-info">Proposal</h5>
  <p>3,9 Days</p>
  </div>
  <div class="p-2 border-left-warning">
  <h5 class="text-warning">Negotiation</h5>
  <p>3,2 Days</p>
  </div>
  <div class="p-2 border-left-dark">
  <h5 class="text-dark">Closing</h5>
  <p>4,2 Days</p>
  </div>

</div>

</div>
</div>

</div>

</div>

<!-- Buat Kolom col-xl-7  -->
<div class="col-xl-5">
<div class="card shadow mb-2" style="height:265px;">
<div class='container'>
<h5 class='text-info font-weight-bold text-left pt-2'>Sales Manager 1</h5>
<h6 class='text-dark font-weight-bold text-left pt-2'>Lead conversion Lead</h6>
<div class="card">
<h6>sparkline</h6>
</div>
<h5 class='text-info font-weight-bold text-left pt-2'>Sales Cycle Lenght</h5>
<div class="card bg-danger"style="height:50px;"></div>
</div>
</div>
<div class="card shadow mb-2" style="height:265px;">
<canvas></canvas>
<h1>KOL 2</h1>
</div>
<div class="card shadow mb-2" style="height:265px;">
<canvas></canvas>
<h1>KOL 3</h1>
</div>
<!-- Buat sub kolom md-6  -->

<!-- Buat sub kolom md-6  -->




</div>
<div>
</div>
<div>
</div>
</div>
<!-- Row ke 2 -->

<div class="row">
<div class="col-md-6">
<div class="card shadow mb-2 " style="height:300px;">
<h1>Kol 1</h1>
<canvas id=""></canvas>
</div>
</div>

<div class="col-md-6">
<div class="card shadow mb-2 " style="height:300px;">
<h1>Kol 2</h1>
<canvas></canvas>
</div>
</div>

<div class="col-md-12">
<div class="card shadow " style="height:240px;">
<h1>Kol 3</h1>
<canvas></canvas>
</div>
</div>

</div>

<!-- row 3 -->




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