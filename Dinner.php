<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    input {
  width: 100%;
}
          table {
  width: 100%;
  background-color: none;
  border-collapse: collapse;
}
td {
  border-bottom: 1px solid black;
  text-align: center;
  color: black;
}
th{
    text-align: center;
    background-color: #99FFFF;
    height: 50px;
    border: 1px solid;
    color: black;
}
tr:hover {background-color: #FFFFCC;}

td{
    height: 50px;
}
input[type=submit] {
  width: auto;
  padding: 8px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: #4CAF50;
  border: none;
  border-radius: 8px;
}
input[type=submit]:hover{
    background-color: #FFFFCC;
}
.contaner{
    margin: 10px 0;
    padding: 100px 80px 100px 100px;
}
.add{
    background-color: #FFFFCC;
}
.add:hover{
    background-color: #C0C0C0;
}
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Account
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="User.php">
                    <i class="fas fa-user fa-tachometer-alt"></i>
                    <span>User</span></a>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Product
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-list"></i>
                    <span>Product</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">list product</h6>
                        <a class="collapse-item" href="Breakfast.php">Breakfast</a>
                        <a class="collapse-item" href="Lunch.php">Lunch</a>
                        <a class="collapse-item" href="Dinner.php">Dinner</a>
                        <a class="collapse-item" href="Wine.php">Wine</a>
                        <a class="collapse-item" href="Dessert.php">Dessert</a>
                        <a class="collapse-item" href="Drink.php">Drink</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Order
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="order.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>list order</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
                    <h2>list of Dinner</h2>
                    <?php
                       require_once 'connect.php';
                       $conn = new database('localhost', 'root', '', 'php_project');
                    ?>
                       <div>
                           <form action="" method="post">
                           <a href="#" data-toggle="modal" data-target="#DinnerModal">
                               <button class = "add">
                               <i class="fas fa-plus"></i>
                               ADD
                               </button>
                            </a>
                           </form>
                             <table>
                                 <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>price</th>
                                   <th>image</th>
                                   <th>material</th>
                                   <th>Role</th>
                                   <th>Update</th>
                                   <th>Delete</th>
                                </tr>
                               <?php
                                       $where = array('D_role'=>'dinner');
                                       $result = $conn->select_where('dish', $where);
                                       while($row = $result->fetch_assoc()){
                                      ?>
                                        <tr>
                                              <td><?php echo $row['D_id'];?></td>
                                              <td><?php echo $row['D_name'];?></td>
                                              <td><?php echo $row['D_price'];?></td>
                                              <td><img src='<?php echo $row['D_img'];?> ' alt="" width="250px" height="150px"></td>
                                              <td><?php echo $row['D_material'];?></td>
                                              <td><?php echo $row['D_role'];?></td>
                                                <td>
                                              <a href="./update_product.php?D_id=<?php echo $row['D_id'] ?>"> <i class="fas fa-edit"></i></a>
                                              </td> 
                                                <td>
                                              <a href="./delete_product.php?D_id=<?php echo $row['D_id'] ?>"><i class="fas fa-trash-alt"></i></a>
                                                 </td>
                                                </tr>
                                                <?php
                                                  }
                                                ?>
                                               </table>
                                </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- modal create -->
    <div class="modal fade" id="DinnerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insert Dinner</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <label for="name_dinner">Dinner Name</label><br>
                    <input type="text" name="name_dinner" value="<?php if(isset($_POST['name_dinner'])) echo $_POST['name_dinner'];?>"><br><br>
                    <label for="price_dinner">Dinner Price</label><br>
                    <input type="number" name="price_dinner" value="<?php if(isset($_POST['price_dinner'])) echo $_POST['price_dinner'];?>"><br><br>
                    <label for="material_dinner">Dinner material</label><br>
                    <input type="text" name="material_dinner" value="<?php if(isset($_POST['material_dinner'])) echo $_POST['material_dinner'];?>"><br><br>
                    <label for="img">Image Dinner</label><br>
                    <input type="file" name="image" value=""/><br><br>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <!-- <button name="btn_dinner">Save</button> -->
                    <input type="submit" name="btn_dinner" value='Save' >
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['btn_dinner'])){

        $name = $_POST['name_dinner'];
        $price = $_POST['price_dinner'];
        $material = $_POST['material_dinner'];
        // $img = $_POST['img'];
        $img = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];

        if(!empty($name) && !empty($price) && !empty($material) && !empty($img)){
            $folder = "img_dinner/".$img;
            move_uploaded_file($tempname, $folder);
            $data = array(  
                'D_name' => mysqli_real_escape_string($conn->getCon(),$name),
                'D_price' => mysqli_real_escape_string($conn->getCon(),$price),
                'D_img' => mysqli_real_escape_string($conn->getCon(),$folder),
                'D_material' => mysqli_real_escape_string($conn->getCon(),$material),
                'D_role'=> mysqli_real_escape_string($conn->getCon(),'dinner')
         );
         if($conn->insert('dish',$data)){
         }
     }
    }
    ?>
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