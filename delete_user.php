<?php
    require_once 'connect.php';
    $conn = new database('localhost', 'root', '', 'php_project');
    if(isset($_GET['user_id'])){

        $where = array('user_id'=> $_GET['user_id']); 

        if($conn->delete('user_web', $where)){
            header("location: http://localhost/admin_PHP/User.php");
        }
        else {
            echo "Lỗi delete: " . mysqli_error($conn);
        }
    }
      ?>