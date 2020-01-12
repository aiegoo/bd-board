<?php
include_once '../module/conn.php';

$id = $_GET['id'];
$sql = "DELETE FROM board WHERE id = " . $id;
mysqli_query($conn, $sql);

?>

<script>
alert("삭제되었습니다");
location.href = 'li.php';
</script>