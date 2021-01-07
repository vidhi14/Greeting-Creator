<?php 

$uname="user1"; 
$cname="user1";
$pass="user1"; 

session_start();

if(isset($_SESSION['t1'])) 
{
		echo "<p align=right>";
		echo "<br><br><a href='logout.php'><input type=button value=Logout name=Logout></a>"; 
		echo "</p>";
}	 
else
{
		if($_POST['t1']==$uname && $_POST['t3']==$pass && $_POST['t2']==$cname)
		{
				$_SESSION['t1']=$uname; 
				echo "<script>location.href='wish.php'</script>";
		}	 
		else
		{
				echo "alert(Incorrect username or password)"; 
				echo "<script>location.href='login.php'</script>";
        }			
}	 

?>