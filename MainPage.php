<?php
$username = "Stranger";
if(isset($_COOKIE["user"])){
	$username = $_COOKIE["user"];
}
$userlist = json_decode(file_get_contents("users"), true);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Hello, <?php echo($username);?>!</title>
	</head>
	
	<body>
	<h1>
	<?php echo("Hello, ".$username)."!";?>
	</h1>
	<h2>
	<?php
		foreach ($userlist as $user){
			echo("</br>".$user["user"]);
		}
	?>
	</h2>
	</body>
</html>
