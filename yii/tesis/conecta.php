<?php


$servidor = "146.83.196.166";

$username = "ffrancis";
$password = "oHXjXXwB";
$database = "ffrancis";

$con = mysql_connect($servidor,$username,$password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$sql="SELECT * FROM region";

?>
