<?
<?php
   

$connection = mysqli_connect('localhost', 'cariana', 'a523@749', 'users');  
 if(!$connection) {
     die("Database connection failed");
 }
/* if(isset($_POST['submit']))  {
$username = $_POST['username'];
$password = $_POST['password'];
$connection = mysqli_connect('localhost', 'cariana', 'a523@749', 'users');
if($connection) {
  echo "we are connected";
}else{
  die("database connection failed");
}
$query = "INSERT INTO users(username, password)";
$queyr .= "VALUES ('$username', '$password')";

$result = mysqli_query($connection, $query);

}
 */
?>