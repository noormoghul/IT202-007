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
<input name="number" type="number" placeholder="Enter a number"/>
<input name="password" type="password" placeholder="Enter a FAKE password"/>
<input type="radio" name="radio" value="Yes"/>
<input type="radio" name="radio" value="No"/>
<input type="checkbox" name="check"/>
<textarea name="text"></textarea>
<input type="date" name="date"/>
<input type="submit" value="Try it"/>
</form>
</body>
</html>
