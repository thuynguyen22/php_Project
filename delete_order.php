<?php
    require_once 'connect.php';
    $conn = new database('localhost', 'root', '', 'php_project');
    if(isset($_GET['or_id'])){
        $where = array('or_id'=> $_GET['or_id']);
        $table = array('table_1'=>'dat_hang', 'table_2'=>'chi_tiet_dat_hang');
        $condition1 = '';
        foreach($table as $key => $value)  
                 {  
                    $condition1 .= $value.", ";  
                 }
        $condition1 = substr($condition1, 0, -2);  
        echo  $condition1;

        if($conn->delete("chi_tiet_dat_hang", $where)){
            if($conn->delete("dat_hang", $where)){
                header("location: http://localhost/admin_PHP/order.php");
            }
        }
        else {
            echo "Lỗi delete: " . mysqli_error($conn);
        }
    }
      ?>