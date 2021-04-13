<?php
    require_once 'connect.php';
    $conn = new database('localhost', 'root', '', 'php_project');
    if(isset($_GET['or_id'])){
        $where = array('or_id'=> $_GET['or_id']);
        $result = $conn->select_where('dat_hang', $where); 
        $row = $result->fetch_assoc(); 
     }  
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.ex1 {
  width: 700px;
  margin: auto;
  border: 1px solid black;
  background-color: blanchedalmond;
  text-align: left;
}
.text{
    font-weight: bold;
}
/* body{
    background-image: url("https://cdn.vnlife.org/img/2020/5/9/70d69878e2ece9ff86b7b87b948c9b44.jpg");
} */
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit] {
  width: auto;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: #00ffff;
  border: none;
}
input[type=submit]:hover{
    background-color: #f5f5f5;
}
    
    </style>
</head>
<body>
<div class="ex1">
<center>
<h2>Update Order</h2>
</center>
<form action=""method="POST" enctype="multipart/form-data">
        <label for="or_id">Order id</label><br>
        <input type="text" name="or_id" value="<?php echo $row['or_id'];?>" readonly><br><br>
        <label for="user_id">User id</label><br>
        <input type="text" name="user_id" value="<?php echo $row['user_id'];?>"><br><br>
        <label for="price">Price</label><br>
        <input type="number" name="price" value="<?php echo $row['or_price'];?>"><br><br>
        <label for="status">Status</label><br>
        <input type="text" name="status" value="<?php echo $row['or_status'];?>"><br><br>
        <label for="or_go_time">Order go time</label><br>
        <input type="text" name = "or_go_time" value="<?php echo $row['or_go_time'];?>" readonly><br>
        <label for="or_time">Order time</label><br>
        <input type="text" name = "or_time" value="<?php echo $row['or_go_time'];?>" readonly><br>
        <label for="address">Address</label><br>
        <input type="text" name = "address" value="<?php echo $row['or_address'];?>" readonly><br>
        <input type="submit" name = "update" value="Update">
</form>
</div>
<?php
if(isset($_POST['update'])){
  $or_id = $_POST['or_id']; 
  $user_id = $_POST['user_id']; 
  $price = $_POST['price']; 
  $status = $_POST['status']; 
  $or_go_time = $_POST['or_go_time']; 
  $or_time = $_POST['or_time']; 
  $or_address = $_POST['address'];
    if(!empty($or_id) && !empty($user_id) && !empty($price) && !empty($status) && !empty($or_go_time) && !empty($or_time) && !empty($or_address)){
      $where = array('or_id' => $or_id);
      $fields = array('status'=> $status);  
      if($conn->update('dat_hang', $fields, $where)){
        header("location: http://localhost/admin_PHP/order.php");
      }
      else{
        echo "loi";
      }
    }
  }
?>
</body>
</html>
<!-- 'or_id' => $or_id, 'user_id'=>$user_id, 'price' => $price, 'status'=> $status, 'or_go_time' => $or_go_time, 'or_time' => $or_time, 'or_address' => $or_address  -->