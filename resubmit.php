<!DOCTYPE html>
<html>
<head>
	<title>Resubmit</title>
</head>
<body>

<?php
if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	echo "Berhasil Login <br>";
	echo "Name: $name<br>";
	echo "Email: $email<br>";
	echo "Password : $password<br>";
?>
	<br>
	<form method="post" action="forms.php">
			<input type="submit" name="resubmit" value="Resubmit">
	</form>
<?php
}
?>

</body>
</html>
