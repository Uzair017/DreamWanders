<?php
$server='Localhost';
$user="root";
$pass="";
$db_name="travelwanders";

$conn=mysqli_connect($server,$user,$pass,$db_name);

if($conn){
  echo "Connected!";
}
else{
    echo "Failed!";

}


?>