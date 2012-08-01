<?php
echo ('ss');
$con = mysql_connect('localhost','root','');
if (!$con)
  {
	echo ('dead');
	die('Could not connect: ' . mysql_error());
  }
echo ('success');
mysql_select_db('scholarshipmanagement') or die(mysql_error());
?>