<?php
//helper
function getName(){
	if(isset($_GET['name'])){
		echo "<p>Hello, " . $_GET['name'] . "</p";
	}
}
?>
<html>
<head></head>
<body>
<?php getName();?>
<form mode="GET" action="#">
<input name="name" type="text" placeholder="Enter your name"/>
<input type="submit" value="Try it"/>
</form>
</body>
</html>
