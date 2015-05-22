<?php include_once '..\Class\UserController.php';

if (isset($_GET['name']) and isset($_GET['last']) and isset($_GET['email']) and isset($_GET['password'])){
	$name = $_GET['name'];
	$last = $_GET['last'];
	$email = $_GET['email'];
	$password = $_GET['password'];
}else{
	$name = null;
	$last = null;
	$email = null;
	$password = null;
}
 
?>

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

<?php 

$controller = new UserController($name, $last, $email, $password);
$controller->setEventHandler();

?>


</div>

<div id="aside"></div>

<div id="footer"></div>

</div>

</body>
</html>