<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
}</style>
</head>
<body>
    <div>
    <h2>Detail of order</h2>
    <a href="order.php">
    <button>Return</button>
    </a>
    <?php
                      require_once 'connect.php';
                      $conn = new database('localhost', 'root', '', 'php_project');
                      if(isset($_GET['or_id'])){
                        $where = array('or_id'=> $_GET['or_id']);
                        $result = $conn->select_where('chi_tiet_dat_hang', $where);
                      }
                      ?>
                    <div>
                        <table>
                          <tr>
                          <th>CT id</th>
                          <th>D id</th>
                          <th>or id</th>
                          <th>user id</th>
                          <th>pro name</th>
                          <th>pro quantity</th>
                          <th>ct time</th>
                          <th>price</th>
                          <th>or status</th>
                          <th>ct go time</th>
                          </tr>
                          <?php
                        //   $where = array('or_id'=>'user');
                          while($row = $result->fetch_assoc()){
                          ?>
                         <tr>
                        <td><?php echo $row['CT_id'];?></td>
                        <td><?php echo $row['D_id'];?></td>
                        <td><?php echo $row['or_id'];?></td>
                        <td><?php echo $row['user_id'];?></td>
                        <td><?php echo $row['pro_name'];?></td>
                        <td><?php echo $row['pro_quantity'];?></td>
                        <td><?php echo $row['ct_time'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td><?php echo $row['or_status'];?></td>
                        <td><?php echo $row['ct_go_time'];?></td>
                        </tr>
                        <?php
                        }
                         ?>
                       </table>
                      </div>
    </div>
</body>
</html>