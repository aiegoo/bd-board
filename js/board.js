$("#bt_wr").click(function(){
 var $f = $(document.wr_form);
 var $title = $("input[name='title']", $f);
 var $writer = $("input[name='writer']", $f);
 var $content = $("textarea[name='content']", $f);

if($title.val() == ""){
  alert("제목을 입력하세요.");
  $title.focus();
  return;
}
if($writer.val() == ""){
  alert("작성자를 입력하세요.");
  $writer.focus();
  return;
}
if($content.val() == ""){
  alert("내용을 입력하세요.");
  $content.focus();
  return;
}

$f.submit();
});