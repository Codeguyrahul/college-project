<?php
$con = mysqli_connect('localhost','root');

if($con) {
	echo " connection successful ";
}
else{
	echo "no connection";
}

mysqli_select_db($con, 'mynewsite');

$user = $_POST['user'];
$email = $_POST['Email'];
$mobile = $_POST['mobile'];
$comments = $_POST['Comments'];

$query = " insert into mynewsite (user ,email ,mobile ,comment )

values ('$user','$email','$mobile', '$comments')";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');
 

 ?>