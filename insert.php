<?php


$con = mysqli_connect('122.164.84.147','root','')

if(!$con){
	echo 'Not connected to server';
	}

if(! mysqli_select_db($con,'HAIxhNBolo')){
	echo 'Database Not Selected';
	}

$Name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];


$sql="INSERT INTO table (name, addres, mobile) VALUES ('$name', '$address', '$mobile')";


if(!mysql_query($con,sql)){
	echo 'Not inserted';
	}
else{
	echo 'Inserted';
	}

header("refresh:2; url=https://rakeshmkumar.github.io/Sample/");

?>
