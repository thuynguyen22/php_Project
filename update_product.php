<?php
    require_once 'connect.php';
    $conn = new database('localhost', 'root', '', 'php_project');
    if(isset($_GET['D_id'])){
        $where = array('D_id'=> $_GET['D_id']);
        $result = $conn->select_where('dish', $where); 
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
  border: none;
  background-color: #CCCCCC;
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
<h2>Update Product</h2>
</center>
<form action=""method="POST" enctype="multipart/form-data">
        <label for="id">ID</label><br>
        <input type="text" name="id" value="<?php echo $row['D_id'];?>" readonly><br><br>
        <label for="name">Name</label><br>
        <input type="text" name="name" value="<?php echo $row['D_name'];?>"><br><br>
        <label for="price">Price</label><br>
        <input type="number" name="price" value="<?php echo $row['D_price'];?>"><br><br>
        <label for="material">Material</label><br>
        <input type="text" name="material" value="<?php echo $row['D_material'];?>"><br><br>
        <label for="role">role</label><br>
        <input type="text" name = "role" value="<?php echo $row['D_role'];?>" readonly><br>
        <label for="img">Image</label><br>
        <img src='<?php echo $row['D_img'];?> ' width='250px' height='150px'>
        <input type="text" name='img' value="<?php echo $row['D_img'];?>" readonly><br>
        <input type="file" name="img_new"><br>
        <p>Select the file if you want to change the image </p><br>
        <input type="submit" name = "update" value="Update">
</form>
</div>
<?php
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $material = $_POST['material'];
    $role = $_POST['role'];
    $img = $_POST['img'];
    $img_new = $_FILES['img_new']['name'];
    if(!empty($name) && !empty($price) && !empty($material)){
        if(empty($img_new)){
            $where = array('D_id'=> $id);
            $fields = array('D_id'=> $id, 'D_name' => $name, 'D_img' => $img,'D_price' => $price,'D_material' =>  $material,'D_role' =>  $role);
                  if($conn->update('dish', $fields, $where)){
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
        }
        else{
            $tempname = $_FILES['img_new']['tmp_name'];
            if($row['D_role'] == "breakfast"){
               $folder = "img_breakfast/".$img_new;
               }
            else if($row['D_role']=='lunch'){
               $folder = "img_lunch/".$img_new;
               }
            else if($row['D_role']=='wine'){
                $folder = "img_wine/".$img_new;
               }
            else if($row['D_role']=='dinner'){
              $folder = "img_dinner/".$img_new;
               }
            else if($row['D_role']=='dessert'){
            $folder = "img_dessert/".$img_new;
               }
            else if($row['D_role']=='drink'){
            $folder = "img_drink/".$img_new;
               }
            move_uploaded_file($tempname, $folder);
            $where = array('D_id'=> $id);
            $fields = array('D_id'=> $id, 'D_name' => $name, 'D_img' =>$folder,'D_price' => $price,'D_material' =>  $material,'D_role' =>  $role);
            if($conn->update('dish', $fields, $where)){
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
        }
    }
}
?>
</body>
</html>