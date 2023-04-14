<!DOCTYPE html>
<html>
<head>
	<title>Form Submit</title>
</head>
<body>

<h2>Form Submit</h2>

<form method="post" action="resubmit.php">
	<label for="name">Name:</label>
	<input type="text" name="name" id="name" placeholder="Username" required><br><br>

	<label for="email">Email:</label>
	<input type="email" name="email" id="email" placeholder="Email" required><br><br>

	<label for="password">Password:</label>
	<input type="password" name="password" id="password" placeholder="Password" required><br><br>

	<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
