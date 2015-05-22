<html>
<head>
<title>Creat your Profile!</title>
<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

<div class="container">

<div id="header"> <h1>Create your new profile!</h1> </div>

<div id="nav"> 

<ul>
	<li><a href="../GUI/index.php">Home</a></li>
	<li><a href="../GUI/ManageProfile.php">Manage your profile</a></li>
</ul>

</div>

<div id="section">

<form name="form" action="userRegistration.php" method="get"><br>
<label>Name </label><input type="text" name="name" required><br>
<label>Last </label><input type="text" name="last" required><br>
<label>Email </label><input type="email" name="email" required><br>
<label>Password </label><input type="password" name="password" required><br>
<button type="submit">Sign up!</button>
</form>

</div>

<div id="aside"></div>

<div id="footer"></div>

</div>

</body>
</html>