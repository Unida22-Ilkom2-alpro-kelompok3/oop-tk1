<!DOCTYPE html>
<html>
<head>
	<title>Form Submit</title>
</head>
<body>



<h2>Form Submit</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<label for="name">Name:</label>
	<input type="text" placeholder = "Nama Anda" name="name" id="name" required><br><br>

	<label for="email">Email:   </label>
	<input type="email" placeholder = "Email Anda " name="email" id="email" required><br><br>
	
	<label for="password" >Password:</label>
	<input type="password" placeholder = "Password" name="password" id="password" required ><br><br>

	<input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST["submit"])) {
	echo"Berhasil Login <br>";
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	echo "Name: $name<br>";
	echo "Email: $email<br>";
	echo "Password : $password<br>";
}
?>

</body>
</html>