<?php 

session_start();
if(isset($_SESSION['t1']))
{
	session_destroy();
	echo "<script>location.href='login.php'</script>";
}	
else
{
	echo "<script>location.href='login.php'</scipt>";
}	
?>