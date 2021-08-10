<?php
session_start ( );
?>
<?php
include 'UNP19b434h.php';
if ( isset ($_SESSION [ 'conection' ] ) ) {
	header ("location:DA68fbyy07.php");}
else {
if ( isset ( $_POST ['submit'] ) ) {
	 	 $user = $_POST['username'];
		 $pass = $_POST['password'];
if ( $user== $USERNAME AND
     $pass== $PASSWORD) {
			       $_SESSION ['conection'] =$user;
	header ("location:DA68fbyy07.php");  }
else {
	echo "
				<script>
				alert ('name and password are not registered. . .');
				window.location.href='index.php';
				</script>
				";
 }	
 }
else {
?>
</div> 
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="font/font.ttf">
	<link href="font/font.ttf" >
	<title>AdminPanel</title>
</head>

<div class="navbar">
	<div class="navbar-btn-wrapper">
		<button class="navbar-btn" onclick="navpop2()">Help</button> 
	</div>
	<img src="img/logo.jpg">
	<div class="navbar-txt-game">
		<span><br>
		ADMIN PANEL
		</span>
		Data Rsult login
	</div>
</div>

<div class="nav-popup-wrapper navpop2 animated fadeIn" style="display: none;"><center>
<div class="nav-popup">
<div class="nav-popup-content">
	<a onclick="close_navpop2()" class="close-navpop">X</i></a>
	<div class="txt-hi-nick">HELP ?</div>
<br>
<br>
please contact rezza.awl@gmail.com and tell the issue you are experiencing, such as forgetting your password and others
</div>
</div>
</center>
</div>
<body>

<div class="container-mask">
<div class="content">
<br>
	<div class="message animated fadeIn"> 
	<div class="txt-hi-nick">HELLO ADMIN</div>
	
ORIGINAL SCRIPT FROM
<br>
MyNulledCodes
<br>
REBUID AND RE DESGN BY ME : REZZA
<BR>
@14-07-2020
<br>
@ original script S13 RB140720.

	<div class="login-btn"  onclick="navpop()">LOGIN</div>
	<div class="login-btn"  onclick="location.href=' ../index.php ' ">HOME</div>
	</div> 
<br>

<div class="nav-popup-wrapper navpop animated fadeIn" style="display: none;">
<div class="nav-popup">
<div class="nav-popup-content">

<a onclick="close_navpop()" class="close-navpop">X</i></a>
<br>
<div class="txt-hi-nick">PLEASE LOGIN</div>
<form action=" <?php $_SERVER['PHP_SELF']; ?>" method="post">

<input class="input-box" type="text" placeholder="Username" name="username" required />
<input class="input-box" type="password" placeholder="Password"  name="password" required />





<input type="submit" name="submit" value="LOGIN" class="login-btn">
<br>
<br>
<div class="txt-forget"<button onclick="navpop2()" onclick=" close-navpop "txt-option">Forgotten Password ?</div>


<div class="nav-popup-wrapper2 navpop2 animated fadeIn" style="display: none;"><center>
<div class="nav-popup">
<div class="nav-popup-content">
	<a onclick="close_navpop2()" class="close-navpop">X</i></a>
	<div class="txt-hi-nick">Forgotten Password ?</div>
<br>
<br>
please contact rezza.awl@gmail.com and tell the issue you are experiencing, such as forgetting your password and others
</div>
</div>
</center>
</div>


</form>

<?php
	
	}
	}
	
?>

</div>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/popup.js"></script>

</body>
</html>