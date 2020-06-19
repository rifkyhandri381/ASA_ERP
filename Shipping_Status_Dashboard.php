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
            <h1 class="h3 mb-0 text-gray-800">Shipping Status Dashboard</h1>
            
          </div>

          <!-- Content Row -->
         <div class="row">

         <div class="col-md-6 col-sm-6 ">
         <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Orders</h6>
                
                  
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                
                <div class="card-body">
                
                  
                <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Order Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Back Ordered</td>
                    <td>May 2020</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Back Ordered</td>
                    <td>May 2020</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Back Ordered</td>
                    <td>May 2020</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td>Mark</td>
                    <td>Back Ordered</td>
                    <td>May 2020</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td>Mark</td>
                    <td>Back Ordered</td>
                    <td>May 2020</td>
                    </tr>
                    
                </tbody>
                </table>
        </div>
</div>
</div>


                <div class="col-xl-6 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Volume Today <small>Last 5 Years</small></h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    </div>
                    <!-- Card Body -->
                <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">Order to Shop</th>
                    <th scope="col">Overdue Shipment</th>
                    <th scope="col">Open POs</th>
                    <th scope="col">Late Vendor Shipment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">106</th>
                    <td>20</td>
                    <td>198</td>
                    <td>12</td>
                    </tr>
                    <tr>
                    <th scope="row">106</th>
                    <td>20</td>
                    <td>198</td>
                    <td>12</td>
                    </tr>
                    <tr>
                    <th scope="row">106</th>
                    <td>20</td>
                    <td>198</td>
                    <td>12</td>
                    </tr>
                    <tr>
                    <th scope="row">106</th>
                    <td>20</td>
                    <td>198</td>
                    <td>12</td>
                    </tr>
                    </tbody>
                </table>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6  ">


         <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-dark">Global Financial Performance</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="bar4"></canvas>
                    </div>
                </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Inventory </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    </div>
                    <!-- Card Body -->
                <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">Order to Shop</th>
                    <th scope="col">Overdue Shipment</th>
                    <th scope="col">Open POs</th>
                    <th scope="col">Late Vendor Shipment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">106</th>
                    <td>20</td>
                    <td>198</td>
                    <td>12</td>
                    </tr>
                    <tr>
                    <th scope="row">106</th>
                    <td>20</td>
                    <td>198</td>
                    <td>12</td>
                    </tr>
                    <tr>
                    <th scope="row">106</th>
                    <td>20</td>
                    <td>198</td>
                    <td>12</td>
                    </tr>
                    <tr>
                    <th scope="row">106</th>
                    <td>20</td>
                    <td>198</td>
                    <td>12</td>
                    </tr>
                    </tbody>
                </table>
                <div class = "row">
                <canvas id ="barpie"></canvas>
                </div>
                </div>
              </div>
            </div>
            
            <!-- easy pie dashboard bekum On time Shipping hal 7 -->





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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/area-chart.js"></script>
    <script src="js/demo/are-chart2.js"></script>
    <script src="js/demo/stack-chart.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="utils.js"></script>
  <script src="js/demo/chart-line.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
   <script src="js/demo/Out_of_stock_items.js"></script>
  <script src="js/demo/Donut-CostofCarryMTDhal-10.js"></script>
  <script src="js/Shipping_Status/inventory.js"></script>
  <script src="js/Shipping_Status/PerfectOrderRate.js"></script>


<script src="js/demo/Donut-CostofCarryMTDhal-10.js"></script>

<script src="js/demo/chart-pie.js"></script>
<script src="js/demo/chart-line.js"></script>
<script src="js/demo/chart-bar-demo.js"></script>
<script src="js/Supply_Chain_Management/inventoryTosales.js"></script>
<script src="js/Supply_Chain_Management/Inventory_turnOver.js"></script>
<script src="js/Supply_Chain_Management/Carrying_Cost.js"></script>
<script src="js/Supply_Chain_Management/Inventory_Accuracy.js"></script>
<script src="js/Shipping_Status/Bar_Global.js"></script>
<script src="js/Shipping_Status/inventory.js"></script>
<script src="js/Supply_Chain_Management/Inventory_Accuracy.js"></script>



        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
      <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="vendors/nprogress/nprogress.js"></script>
        <!-- ECharts -->
        <script src="vendors/echarts/dist/echarts.min.js"></script>
        <script src="vendors/echarts/map/js/world.js"></script>
        

        <!-- Custom Theme Scripts -->
        <script src="build/js/custom.min.js"></script>

      
        <!-- jQuery -->
        <script src="propertis/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
      <script src="propertis/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- FastClick -->
        <script src="propertis/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="propertis/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="propertis/Chart.js/dist/Chart.min.js"></script>
        <!-- jQuery Sparklines -->
        <script src="propertis/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- Flot -->
        <script src="propertis/Flot/jquery.flot.js"></script>
        <script src="propertis/Flot/jquery.flot.pie.js"></script>
        <script src="propertis/Flot/jquery.flot.time.js"></script>
        <script src="propertis/Flot/jquery.flot.stack.js"></script>
        <script src="propertis/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="propertis/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="vendors/DateJS/build/date.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="vendors/moment/min/moment.min.js"></script>
        <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        
        <!-- Custom Theme Scripts -->
        <script src="build/js/custom.min.js"></script>
        </body>

    </html>
    