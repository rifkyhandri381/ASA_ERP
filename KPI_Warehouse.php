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
            <h1 class="h3 mb-0 text-gray-800">KPI Warehouse</h1>
            
          </div>

          <!-- Content Row -->
         <div class="row">

         <div class="col-md-6 col-sm-6  ">
         <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: linear-gradient(to right, orange, #ec38bc);">
                  <h6 class="m-0 font-weight-bold text-white">Warehouse Operating Cost</h6>
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
                
                                       <div id="echart_pie" style="height:350px;"></div>
                    
                   

               
                </div>
              </div>
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: linear-gradient(to right, orange, #ec38bc);">
                  <h6 class="m-0 font-weight-bold text-white">Perfect Order Rate</h6>
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
                  <div class="chart-area">
                    <canvas id="PerfectOrderRate"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: linear-gradient(to right, orange, #ec38bc);">
                  <h6 class="m-0 font-weight-bold text-white">Total Shipping by Country</h6>
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
                  
                  <div class="chart-area">
                    <canvas id="TotalShipmentBycountry"></canvas>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: linear-gradient(to right, orange, #ec38bc);">
                  <h6 class="m-0 font-weight-bold text-white">Delivery By Destination</h6>
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
                  <div class="chart-area">
                    <canvas id="chartpie1"></canvas>
                  </div>
                </div>
              </div>
            </div>

            

 
<div class="row">

<div class="col-md-6 col-sm-6 ">
<div class="card shadow mb-4">
       <!-- Card Header - Dropdown -->
       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"  style="background: linear-gradient(to right, orange, #ec38bc);">
         <h6 class="m-0 font-weight-bold text-white">Orders</h6>
       
         
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
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: linear-gradient(to right, orange, #ec38bc);">
           <h6 class="m-0 font-weight-bold text-white">Volume Today <small>Last 5 Years</small></h6>
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
       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: linear-gradient(to right, orange, #ec38bc);">
         <h6 class="m-0 font-weight-bold text-white">Global Financial Performance</h6>
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
        <!-- Area Chart -->
        <div class="row">
 <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"  style="background: linear-gradient(to right, orange, #ec38bc);">
                  <h6 class="m-0 font-weight-bold text-white">Suplier Defect Rate & Defect Type</h6>
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
                    <canvas id="Experiment"></canvas>
                   </div>

                  <div class="row">
                  <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                

</div>
</div>

</div>
</div>
</div>
     </div>
     <div class="col-xl-6 col-lg-7">
       <div class="card shadow mb-4" style="height:800px">
           <!-- Card Header - Dropdown -->
           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background: linear-gradient(to right, orange, #ec38bc);">
           <h6 class="m-0 font-weight-bold text-white">Inventory </h6>
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

   <div class="row">

<div class="col-md-6 col-sm-6  ">
<div class="card shadow mb-4">
       <!-- Card Header - Dropdown -->
       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background:linear-gradient(to right,#006600, #66ff33);">
         <h6 class="m-0 font-weight-bold text-white">Inventory To Sales <small>This Year</small></h6>
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
           <canvas id="ITS"></canvas>
           </div>
       </div>
       </div>
     </div>
   <div class="col-xl-6 col-lg-7">
     <div class="card shadow mb-4">
       <!-- Card Header - Dropdown -->
       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background:linear-gradient(to right,#006600, #66ff33);">
         <h6 class="m-0 font-weight-bold text-white">Inventory Turnover - <small>Last 5 Years</small></h6>
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
         <div class="chart-area">
           <canvas id="ITL"></canvas>
         </div>
       </div>
     </div>
   </div>

   <div class="col-xl-6 col-lg-7">
     <div class="card shadow mb-4">
       <!-- Card Header - Dropdown -->
       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background:linear-gradient(to right,#006600, #66ff33);">
         <h6 class="m-0 font-weight-bold text-white">Inventory Turnover - <small>Last 5 Years</small></h6>
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
         <div class="chart-area">
           <canvas id="CCO"></canvas>
         </div>
       </div>
     </div>
   </div>

   


   <div class="col-xl-6 col-lg-7 mr-0 p-0">
     <div class="card shadow mb-4 " style="background:linear-gradient(to right,#006600, #66ff33); height:420px">
       <!-- Card Header - Dropdown -->
       <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background:linear-gradient(to right,#006600, #66ff33);">
         <h6 class="m-0 font-weight-bold text-white">Delivery By Destination</h6>
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
         
    
           <canvas id="chart-area"></canvas>
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