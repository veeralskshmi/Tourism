<?php

$name=$_POST['name'];
$age=$_POST['age'];
$phno=$_POST['phno'];
$num=$_POST['num'];

$con=mysqli_connect ("localhost","root","","texts");
$sql="INSERT INTO ugs(name, age, phno, num) values('$name','$age','$phno','$num')";
$r = mysqli_query($con,$sql);

if($r)
{
  echo "Booking Confirmed";
 
}
else 
{
  echo "not added";
}

?>