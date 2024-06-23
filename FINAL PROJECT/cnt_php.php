<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$con = mysqli_connect("localhost","root", "");
if(!$con)
{
	die('Could not connect: '.mysqli_error($con));
}


mysqli_select_db($con,"photography");

$sql = "INSERT INTO contact (name,email,message)


VALUES ('$_POST[fname]','$_POST[mail]','$_POST[text]')";


if(!mysqli_query($con, $sql))
{
	die('Error'. mysqli_error($con));
}

else
{
	header("Location: contact.php");
}



?>

</body>
</html>