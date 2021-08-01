<?php
$connect=mysqli_connect('localhost','root','Sanj333','userdetails');
if(mysqli_connect_errno($connect)){
echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
echo 'Connected Successfully!!';
?>
