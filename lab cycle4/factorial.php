<html>
<head>
<title>factorial of a number in php</title>
</head>
<body>
<form method="POST">
Enter a number
<input type="number" name="number" id="number">
<input type="submit" name="submit" value="submit">
</form>
<?php
if($_POST)
{
  $fact=1;
  $number=$_POST['number'];
  echo"factorial of a number <br><br>";
  for($i=1;$i<=$number;$i++)
  {
     $fact=$fact*$i;
  }
  echo $fact."<br>";
}
?>
</body>
</html>