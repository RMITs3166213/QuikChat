<?php	
	$link = mysqli_connect('localhost', 'root', '1234');
	//Check if SQL database can be contacted
	if (!$link){
		$error = 'Unable to connect to the SQL database';
		include 'error.php';
		exit();
	}
	//Set the SQL database to accept Unicode
	if (!mysqli_set_charset($link, 'utf8')){
		$error = 'Unable to set up database character encoding';
		include 'error.php';
		exit();
	}
	//Connect to SQL QuikChat database
	if (!mysqli_select_db($link, 'qcdb')){ //Change to working title as required
		$error = 'Unable to locate QuikChat database';
		include 'error.php';
		exit();
	}
	$message = $_POST["message"];
	echo $message;
?>
