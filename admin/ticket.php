<?php
include"dbconfig.php";
if($_SESSION['login']=="yes")
{
	
}
else
{
	header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include"sidebar.php";?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <h2>Dashboard</h2>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
          

            <!-- Nav Item - Alerts -->
           

            <!-- Nav Item - Messages -->
          
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name']; ?> </span>
                <img class="img-profile rounded-circle" src="img\user.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          

          <!-- Content Row -->
          <div class="row">

            
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary" style="text-align:center">Ticket</h6>
                 
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area" style="height:600px">
                   <form class="user" method="post" enctype="multipart/form-data">
               
               <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
				  <label for="firstName">Item Name</label>
                
                  <div class="form-label-group">
                    <input type="text"  class="form-control" name="sector" placeholder="Item" required="required" autofocus="autofocus">
                    </div>
                </div>
                <div class="col-md-6">
				 <label for="lastName">TID</label>
                
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" name="tid" placeholder="Tender ID" required="required">
                     </div>
                </div>
              </div>
            </div>
                <div class="form-group">
			 <label for="inputEmail">City</label>
            
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" name="city" placeholder="City" required="required">
                 </div>
            </div>
			<div class="form-group"> <label for="inputEmail">Discription</label>
            
              <div class="form-label-group">
                <textarea  class="form-control"  name="discription" required="required"></textarea>
                 </div>
            </div>
                  
                
                
				
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
				  <label for="inputPassword">Item Image</label>
                    <input type="file" class="form-control " name="fileone">
                  </div>
                  <div class="col-sm-6">
				  <label for="inputPassword">Item Document</label>
                    <input type="file" class="form-control " name="filetwo">
                  </div>
                </div>
				<div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
    <label for="inputPassword">Budget Price</label>
                                
				<div class="form-label-group">
                    <input type="text"  name="inr" class="form-control" placeholder="Budget Price" required="required">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="inputPassword">Due Date</label>
                  
				  <div class="form-label-group">
                    <input type="date" name="date" class="form-control" required="required">
                    </div>
                </div>
              </div>
			  
            </div>
			<div class="form-label-group">
			<label for="inputPassword">Item Quantity</label>
                <input type="text" id="inputEmail" class="form-control" name="qty" placeholder="Item Quantity" required="required">
                 </div>
				 </br>
                <input type="submit"  value="Submit" name="tender" class="btn btn-primary btn-user btn-block">
                
                <hr>
                
              </form>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <?php
if(isset($_REQUEST['tender']))
{
	
	
	$error=$_FILES["fileone"]["error"];

$filenameone=$_FILES["fileone"]["name"];
$type=$_FILES["fileone"]["type"];
$size=$_FILES["fileone"]["size"];
$tmp_name=$_FILES["fileone"]["tmp_name"];
$errortwo=$_FILES["filetwo"]["error"];

$filenametwo=$_FILES["filetwo"]["name"];
$typetwo=$_FILES["filetwo"]["type"];
$sizetwo=$_FILES["filetwo"]["size"];
$tmp_nametwo=$_FILES["filetwo"]["tmp_name"];
extract($_REQUEST);
$filepatho = "img/".$filenameone;
$filepatht = "img/".$filenametwo;
 $query="INSERT INTO `tender`(`TID`, `sector_name`, `discription`, `fileone`, `filetwo`, `city`, `INR`, `due_date`, `qty`) VALUES 
('$tid','$sector','$discription','$filepatho','$filepatht','$city','$inr','$date','$qty')";
	if(move_uploaded_file($tmp_name,"img/$filenameone"))
		{
	if(move_uploaded_file($tmp_nametwo,"img/$filenametwo"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert('Tender Created Successful.');
		 </script>";
	 }
	
	}
	else
	{
		echo"something wrong";
	}
	
	
	
	
	
		}
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


?>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              

              <!-- Color System -->
             

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              

              <!-- Approach -->
             

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; BipinRajashriDnyaneshwar.com 2022</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

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
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

</body>

</html>
