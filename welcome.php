<?php 
	
	#This if statement checks if the fields have value before it redirects to "welcome.php"
	#You can use POST, SERVER or REQUEST here
	if (isset($_POST['register']))
	{
		$studentNo = $_POST['sid'];
		$firstName = $_POST['ln'];
		$lastName  = $_POST['fn'];
		$emailAddress = $_POST['email'];
		$password = $_POST['pwd'];
		$birthdate = $_POST['bday'];

		echo "Welcome, " . $firstName .
		" ". $lastName ."!</br>" .
		'Your ID  number is'. $studentNo .
		'.</br>
		Your email address is '. $emailAddress.
		'. </br>
		Your password is '. $password .
		'. </br>
		Your birthday is '. $birthDate .
		'. <br/> <br/>
		The time is '. date('c');
	}

	else
	{
		#This is how you redirect to another page/ file
		header('location: register.php');
	}

?>


<!DOCTYPE html>

<html>
	<head>
		<title>Welcome Student!</title>
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
	</head>

	<body>
		<div class=  "container">
			<h1 class="text-center">AWW YEAHHHHH IT'S PEANUT BUTTER JELLY TIME!</h1>
			<div class="col-lg-offset-3 col-lg-6">
				<div class="well">

			<img src = "http://inspiresara.com/wp-content/uploads/2015/04/Peanut-butter-jelly-time.gif"/>
	</body>

</html>
