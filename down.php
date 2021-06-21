<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php
  $filename="index.php";
  header("Content-disposition: attachment;filename=$filename");
  readfile($filename);
?>

</body>
</html>