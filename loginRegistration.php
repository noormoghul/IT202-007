<!DOCTYPE html>
<html>
	<head>
	</head>
<body>
	<form method="POST" action="loginRegistration.php">
	<p>
		<label> Username: </label>
			<input type="text" name="username" placeholder="Type your username"/>
	</p>

	<p>
		<label> Password: </label>
			<input type="password" name="password" placeholder="Type your password"/>
	</p>
	
		<input type="submit" name="submit" value="Login"/>
		<input type="reset value="Clear form"/>
	</form>
</body>
</html>

<?php

$userName = $_POST['username'];
$passsword = $_POST['password'];

if(isset($_POST['username']) && isset($_POST['password'])){
	require('comfig.php');
	$connection = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	$database = new PDO($connection, $username, $password);
	$select = "select * from 'LoginForm' where 'UserName' = ':username' and 'Password' = ':password'"
	$sending = $database->prepare($select);
	$ret = $sending->execute(array(":username"=> "$user"));
	$result = $sending->fetch(PDO::FETCH_ASSOC);
	//use pre tags
	echo "<pre>" . var_export($result, true) . "</pre>";
	$end = mysqli_num_rows($result);
	if($end['username'] == $userName && $_POST['password'] == $passsword){
		echo "Logged in.";
	}else{
		echo "Loggin failed, username or password invalid";
	}
	


	//echo $response;
}
?>
