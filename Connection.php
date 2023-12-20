<?php
// class Connection{
//     private $host_name="localhost";
//     private $username="root";
//     private $password="";
//     private $db_name="crud";
//     private const port=3306;
//     public $conn;
//     public function __construct()
//     {
//         $this->conn=new mysqli($this->host_name,$this->username,$this->password,$this->db_name,self::port);
//     }
// }
// $x=new Connection();
// $result=$x->conn->query("SELECT * FROM `products`");
// print_r($y)
// $fet=$result->fetch_all(MYSQLI_ASSOC);
// echo "<pre>";
// print_r($fet);
// echo "</pre>";
$conn=new mysqli("localhost","root","","crud",3306);

?>