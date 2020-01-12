<?php
include_once "../module/conn.php";

$title = $_POST['title'];
$writer = $_POST['writer'];
$content = $_POST['content'];
$readnum = 0;
$date = date('Y-m-d H:i:s');

$sql = " INSERT INTO board SET ";
$sql .= " title = '$title', ";
$sql .= " content = '$content', ";
$sql .= " wdate = '$date', ";
$sql .= " writer = '$writer', ";
$sql .= " readnum = $readnum ";

mysqli_query($conn, $sql);

?>

<script>
alert("저장되었습니다.");
location.href = 'li.php';
</script>