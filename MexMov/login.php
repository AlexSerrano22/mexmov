<?php 
session_start();
$US = $_POST['user'];
$PASS = $_POST['pass'];
$con=mysqli_connect("localhost","root","","observatorio");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM `registro` WHERE `CONTRASENA`='".$PASS."' and `NOMBREUSUARIO`='".$US."' or `CORREO`='".$US."' or `IDUSUARIO`='".$US."'");

$num=mysqli_num_rows($result);
if($num == 1){
while($row = mysqli_fetch_array($result))
  {
  $_SESSION['user'] = $row['NOMBREUSUARIO'];
  }
}
mysqli_close($con);
header("Location: index.php");
?>
