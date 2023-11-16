<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->

<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3306";
$username = "root";
$password = "";
$database = "modul3_wad";

$connect = mysqli_connect($host, $username, $password, $database);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!mysqli_select_db($connect, $database)) {
    die("Failed to select database: " . mysqli_error($connect));
}
function query($query){
    global $connect;
    $result = mysqli_query($connect, $query);
  
    if (!$result) {
      die("Query failed: " . mysqli_error($connect) . "<br>SQL: " . $query);
    }
  
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows [] = $row;
    }
    return $rows;
  }
// 
?>