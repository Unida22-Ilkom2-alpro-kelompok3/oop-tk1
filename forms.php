<!DOCTYPE html>
<html>
<head>
	<title>Form Submit</title>
</head>
<body>

<h2>Form Submit</h2>
<style>
	h2{
		font-family: Georgia, 'Times New Roman', Times, serif;
		-webkit-text-stroke: 2px rgb(51, 182, 11);
		color:rgb(33, 200, 4);
		font-size:30px;

	}
	    .sub{
        background-color: rgb(255, 255, 255);
		padding-left: 20px;
        padding-right: 20px;
        padding-top: 6px;
        padding-bottom: 6px;
		font-weight: bold;
        border-radius:5px;
        cursor: pointer;
		border: solid;
		border-color: rgb(51, 182, 11);
		color: rgb(51, 182, 11);
		border-width:1px;
		transition: all 0.15s;

    }
    .sub:hover{
		color: rgb(255, 255, 255);
		background-color: rgb(51, 182, 11);
		
    }

	.sub:active{
		opacity:0.8;
	}

	input{
		background-color:rgb(131, 220, 104);
		border-width:1px;
		opacity:0.8;
		border-radius: 3px;
	}

	label{
		font-weight: 600;
		color:rgb(51, 182, 11);

	}
</style>
<form method="post" action="resubmit.php">
	<label for="name">Name:</label>
	<input type="text" name="name" id="name" placeholder="Username" required><br><br>

	<label for="email">Email:</label>
	<input type="email" name="email" id="email" placeholder="Email" required><br><br>

	<label for="password">Password:</label>
	<input type="password" name="password" id="password" placeholder="Password" required><br><br>

	<input class = "sub" type="submit" name="submit" value="Submit">
</form>

</body>
</html>
