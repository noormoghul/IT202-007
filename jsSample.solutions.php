<html>
<head>
	<script>
	function pageLoaded(){
		//TODO solutions
		//Google/Explore how to create an element and add it to the DOM
		//create a div tag, add "added new element" as the text
		//add it to the DOM body
		let myDiv = document.createElement('div');
		myDiv.innerText = "Created by JS";
		/*let text = document.createTextNode("Created by JS");
		myDiv.appendChild(text);*/

		document.body.appendChild(myDiv);
	}
	</script>
</head>
<body onload="pageLoaded();">
	<p id="myPara">Just showing that we loaded something...</p>
</body>
</html>
