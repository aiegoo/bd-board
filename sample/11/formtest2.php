<?php //formtest2.php an updated version of formtest.php

if(isset($_POST['name'])) $name = $_POST['name'];
else $name = "(not entered)";

echo <<< _END
<html>

<head>
<title>Form Test</title>
</head>
<body>
  Your name is: $name<br>;
  <form action="formtest2.php" method="post">
  what is your name?
  <input type="text" name="name">
  <input type="submit">
  </form>
</body>
</html>
_END


?>

<? ?>