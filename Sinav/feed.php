<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$name = $_POST['name'];
$email = $_POST['email'];
$konu = $_POST['konu'];
$id=uniqid();
$date=date("Y-m-d");
$time=date("H:i:s");
$feedback = $_POST['feedback'];
$q=mysqli_query($con,"INSERT INTO feedback VALUES  ('$id' , '$name', '$email' , '$konu', '$feedback' , '$date' , '$time')")or die ("Error");
header("location:$ref?q=Geridönüşünüz için teşekkür ederiz...");
?>