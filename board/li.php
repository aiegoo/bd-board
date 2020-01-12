<?php
include_once "../module/conn.php";
include_once "../inc/header.php";
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<div class="container">
  <div class="jumbotron">
    <h3>게시글 리스트</h3>
  </div>
  <div class="text-right w3-padding-16">
    <button class="btn btn-success" onclick="location.href='wr.php';">글쓰기</button>
  </div>
  <table class="table table-hover table-bordered">

    <thead>
      <tr class="row">
        <th class="text-center hidden-xs">번호</th>
        <th class="text-center col-sm-6 col-xs-8">제목</th>
        <th class="text-center col-sm-2 hidden-xs">작성자</th>
        <th class="text-center col-sm-2 col-xs-4">작성일</th>
        <th class="text-center col-sm-1 hidden-xs">조회수</th>
      </tr>
    </thead>
    <tbody>
      <?php 
            $sql = "SELECT * FROM board ORDER BY id DESC";
            $result = mysqli_query($conn, $sql);
            while ($rs = mysqli_fetch_array($result)) { ?>
      <tr class="row">
        <td class="text-center hidden-xs"><?= $rs['id']; ?></td>
        <td class="col-sm-6 col-xs-8"><a href="vi.php?id=<?= $rs['id'] ?>"><?= $rs['title']; ?></a></td>
        <td class="text-center col-sm-2 hidden-xs"><?= $rs['writer']; ?></td>
        <td class="text-center col-sm-2 col-xs-4"><?= substr($rs['wdate'], 0, 10); ?></td>
        <td class="text-center col-sm-1 hidden-xs"><?= $rs['readnum']; ?></td>
      </tr>

      <?php

          }
          ?>

    </tbody>
  </table>


</div>
<? include_once "../inc/footer.php"; ?>