<?php
 class database{
private $server;
private $userName;
private $pass;
private $db;
private $conn;

function database($server, $userName, $pass, $db){
    $this->server = $server;
    $this->userName = $userName;
    $this->pass = $pass;
    $this->db = $db;
}

public function connect(){
    $this->conn = mysqli_connect($this->server, $this->userName, $this->pass, $this->db);
    if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
    }
}
public function getCon(){
     return $this->conn;
}

function select($table){
    $this->connect();
    $sql = "SELECT * FROM $table";          
    $sql = $this->conn->query($sql);
    // $sql = $sql->fetch_assoc();
    return $sql;
}

public function insert($table_name, $data)  
{  
     $string = "INSERT INTO ".$table_name." (";            
     $string .= implode(",", array_keys($data)) . ') VALUES (';            
     $string .= "'" . implode("','", array_values($data)) . "')";  
     if(mysqli_query($this->conn, $string))  
     {  
          return true;  
     }  
     else  
     {  
          echo mysqli_error($this->conn);  
     }  
}  

public function select_where($table_name, $where_condition) {  
           $this->connect();
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition = $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);
           $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->conn, $query);  
           return $result;  
      }

      public function update($table_name, $fields, $where_condition) {  
           $this->connect();
           $query = '';  
           $condition = '';  
           foreach($fields as $key => $value)  
           {  
                $query .= $key . "='".$value."', ";  
           }  
           $query = substr($query, 0, -2);  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . "='".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
           if(mysqli_query($this->conn, $query))  
           {  
                return true;  
           }  
      }

      public function delete($table_name, $where_condition){ 
           
            $this->connect(); 

            $condition = '';  

            foreach($where_condition as $key => $value)

                 $condition .= $key . " = '".$value."' AND ";

                 $condition = substr($condition, 0, -5);  
                 $query = "DELETE FROM ".$table_name." WHERE ".$condition."";  
                 if(mysqli_query($this->conn, $query))  
                 {  
                      return true;  
                 }  
            }
     public function count($table_name, $where_condition){
          $this->connect(); 

            $condition = '';  

            foreach($where_condition as $key => $value)

                 $condition .= $key . " = '".$value."' AND ";

                 $condition = substr($condition, 0, -5);
                 $query = "SELECT COUNT(*) as total FROM ".$table_name." WHERE ".$condition."";
                 $result = mysqli_query($this->conn, $query);
                 return $result;  
     }
     // public function delete_order($table_name, $where_condition){   
     //        $this->connect(); 

     //        $condition = '';
     //        $condition1 = '';
     //        foreach($where_condition as $key => $value)
     //             $condition .= $key . " = '".$value."' AND ";
     //             $condition = substr($condition, 0, -5);
     //             foreach($table_name as $key => $value)  
     //             {  
     //                $condition1 .= $value.", ";  
     //             }
     //             $condition1 = substr($condition1, 0, -2);  
     //             $query = "DELETE FROM ".$condition1." WHERE ".$condition."";  
     //             if(mysqli_query($this->conn, $query))  
     //             {  
     //                  return true;  
     //             }  
     //        }
}
?>