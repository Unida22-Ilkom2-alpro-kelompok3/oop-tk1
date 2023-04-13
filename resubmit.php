<!DOCTYPE html>
<html>
<head>
	<title>Resubmit</title>
</head>
<body>
<style>
	input{
		background-color: rgb(255, 255, 255);
		padding-left: 20px;
        padding-right: 20px;
        padding-top: 6px;
        padding-bottom: 6px;
		font-weight: bold;
        border-radius: 5px;
        cursor: pointer;
		border: solid;
		border-color: rgb(51, 182, 11);
		color: rgb(51, 182, 11);
		border-width:1px;
		transition: all 0.15s;
	}
	input:hover{
		color: rgb(255, 255, 255);
		background-color: rgb(51, 182, 11);
    }

	input:active{
		opacity:0.8;
	}

	.pe{
		font-size:20px;
		color:rgb(51, 182, 11);
		background-color:rgb(255,255,255);
	}

</style>
<?php
if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	echo "<p class='pe'> Berhasil Login !</p>";
	echo "<p>Name: $name<br></p>";
	echo "<p>Email: $email<br></p>";
	echo "<p>Password : $password<br></p>";
?>
	<br>
	<form method="post" action="forms.php">
			<input type="submit" name="resubmit" value="Submit Ulang">
	</form>
<?php
}
?>

</body>
</html>
