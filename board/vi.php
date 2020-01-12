<?php
include_once "../module/conn.php";
include_once "../inc/header.php";

$id = $_GET['id'];
$sql = "SELECT * FROM board WHERE id =" . $id;
$result = mysqli_query($conn, $sql);
$rs = mysqli_fetch_array($result);
$title = $rs['title'];
$content = $rs['content'];
$wdate = $rs['wdate'];
$writer = $rs['writer'];
$readnum = $rs['readnum'];
?>
<div class="container">
  <div class="jumbotron">
    글 내용 보기 <?= $id ?> </div>
  <table class="table table-bordered">
    <tbody>
      <tr class="row">
        <td class="col-xs-4 col-sm-3 bg-warning">제목</td>
        <td class="col-xs-8 col-sm-9"><?= $title ?></td>
      </tr>
      <tr class="row">
        <td class="col-xs-4 col-sm-3 bg-warning">작성자</td>
        <td class="col-xs-8 col-sm-9"><?= $writer ?></td>
      </tr>
      <tr class="row">
        <td class="col-xs-4 col-sm-3 bg-warning">작성일</td>
        <td class="col-xs-8 col-sm-9"><?= $wdate ?></td>
      </tr>
      <tr class="row">
        <td class="col-xs-4 col-sm-3 bg-warning">조회수</td>
        <td class="col-xs-8 col-sm-9"><?= $readnum ?></td>
      </tr>
      <tr class="row">
        <td class="col-xs-4 col-sm-3 bg-warning">내용</td>
        <td class="col-xs-8 col-sm-9"><?= $content ?></td>
      </tr>
    </tbody>
  </table>
  <div class="text-center w3-padding-16">
    <button id="bt_list" class="btn btn-primary">리스트</button>
    <button id="bt_del" class="btn btn-warning">삭제</button>
  </div>

  <script>
  $("#bt_list").click(function() {
    location.href = 'li.php';

  });
  $("#bt_del").click(function() {

    if (confirm('삭제하시겠습니까?')) {
      location.href = 'del_ok.php?id=<?= $id ?>';
    }

  });
  </script>



</div>




<? include_once "../inc/footer.php"; ?>