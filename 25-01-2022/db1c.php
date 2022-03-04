<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
if(mysqli_select_db($con,'db1'))
{
 echo 'connection success';
}
else
{
 echo 'connection failed';
}
?>