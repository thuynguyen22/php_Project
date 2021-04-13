<?php
    require_once 'connect.php';
    $conn = new database('localhost', 'root', '', 'php_project');
    if(isset($_GET['D_id'])){
        $where = array('D_id'=> $_GET['D_id']); 
        $result = $conn->select_where('dish', $where); 
        $row = $result->fetch_assoc();
        if($conn->delete('dish', $where)){
            if($row['D_role']=='breakfast')
            header("location: http://localhost/admin_php/Breakfast.php");
          else if($row['D_role']=='lunch')
            header("location: http://localhost/admin_php/Lunch.php");
          else if($row['D_role']=='wine')
            header("location: http://localhost/admin_php/Wine.php");
          else if($row['D_role']=='dinner')
            header("location: http://localhost/admin_php/Dinner.php");
          else if($row['D_role']=='dessert')
            header("location: http://localhost/admin_php/Dessert.php");
            else if($row['D_role']=='drink')
            header("location: http://localhost/admin_php/Drink.php");
        }
        else {
            echo "Lỗi delete: " . mysqli_error($conn);
        }
    }
      ?>