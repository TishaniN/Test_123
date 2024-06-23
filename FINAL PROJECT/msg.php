<html>
<body>

	


<?php

	
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect: '.mysqli_error($con));
	}

 
 
	mysqli_select_db($con,"photography");

	$sql="INSERT INTO getintouch (FirstName,SecondName,Email,EventDate,EventTime,EventLocation,TypeOfCeromany,Message)

	 VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[wdate]','$_POST[wtime]','$_POST[location]','$_POST[type]','$_POST[message]')";

	if (!mysqli_query($con, $sql))
	{
	die('Error: ' . mysqli_error($con));
	}
	else
	{
		$msg = '<script type="text/javascript"> 
			alert("Your request has been sent..")
		 	</script>';

		echo ("hihih");

		header("Location: getintouch.php");
		/*
		echo "<a href=button.html>
		 Your request has been sent.. Click here to return to Home page </a> ";*/
	}
 

?>



</body>
</html>
