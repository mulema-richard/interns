
<?php 
setcookie($name= "total_sum", $value="7771523",time() +(86400*30),"/");
?>

<html>
<body>
	
	<?php 

	if(!isset($_COOKIE[$name])){
		echo "Cookie named ' ". $name . " ' is not set! ";
	}else {
		echo "Cookie ' ". $name . " ' is set!<br>";
		echo "Value is: " . $_COOKIE[$name];
	}
	?>
</body>

</html>