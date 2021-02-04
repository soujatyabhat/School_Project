<html>
<head>
<title>LOG IN</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
	<section class="header">
<div class="contaier">
	<img src="media/logo/logo.jpg">
</div>	
	</section>
	<div class="loginbox">
		<img src="media/logo/avatar.png" class="avatar">
			<h1>LOGIN HERE</h1>
			<form action = "include/login.php" method="POST" enctype="multipart/form-data">
				<p>Username</p>
				<input type="text" name="" placeholder="Enter Username">
				<p>Password</p>
				<input type="password" name="" placeholder="Enter Password">
				<input type="submit" name="" value="login">
				<a href="#">Lost your password?</a><br>
				<a href="register.php?error=0">Havn't register yet?</a>
			</form>
	</div>
</body>
</html>