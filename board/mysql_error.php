function mysql_fatal_error($msg) {
  $msg2 = mysql_error();
  echo <<< _END
We are sorry, 뭔가 잘못 되었나 봅니다. 에러 내용은 다음과 같습니다. The error message we got was:
<p>$msg: $msg2</p>
뒤로가기 버턴을 누른 후 다시 시도 해 보시기 바랍니다. Please click the back gutton on your browser and try again. If you are still having problems, please <a href="mailto:master@tonyleekorea.com">email us</a> Thank  you.
_END
}