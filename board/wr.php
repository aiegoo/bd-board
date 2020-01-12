<? include_once "../inc/header.php" ?>
<div class="tit">글작성</div>

<form action="wr_ok.php" method="post" name="wr_form">
  <ul class="wrap">
    <li><input type="text" name="title" class="w3-input w3-border" placeholder="제목"></li>
    <li><input type="text" name="writer" class="w3-input w3-border" placeholder="writer"></li>
    <li><textarea name="content" class="w3-input w3-border" placeholder="내용을 작성해 주세요"></textarea></li>
    <li class="w3-center">
      <button type="button" class="w3-button w3-indigo" id="bt_wr">저장</button>
    </li>
  </ul>
</form>
<? include_once "../inc/footer.php" ?>