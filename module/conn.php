<?
require_once 'login.php';
$conn = mysqli_connect($hn, $un, $pw, $db);
mysqli_query($conn, "set names utf8");
if ($conn->connect_error) die($conn->connect_error);
?>