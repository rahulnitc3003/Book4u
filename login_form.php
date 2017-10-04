<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin login</title>
</head>

<body background="images/image.jpg">
<form action="login_form.php" method="post">
<br /><br />
<br /><br />
<br /><br />
<table width="375" height="196" border="15" align="center" bgcolor="#FFCCFF">
	<tr>
    	<td height="63" colspan="6" align="center" bgcolor="#33FF99"><h1><em>Administrator</em></h1></td>
    </tr>
	<tr>
    	<td width="113" height="26" align="center"><b><i>Admin Id:</i></b></td>
	  <td width="194"><input type="text" name="admin" /></td>
    </tr>
    
    <tr>
    	<td height="26" align="center"><b><i>Password</i></b></td>
      <td><input type="password" name="password" /></td>
	</tr>
	<tr>
    	<td height="41" colspan="4" align="center"><input type="submit" name="login" value="Login" />
		<input type="reset" name="reset" value="Reset"/>
        <a href="index.php"><input type="button" name="back" value="Home Page" /></a>
		</td>
    	
    </tr>
</table>
</form>
</body>
</html>
<?php
//connection coding
$user = 'm150050ca';
$pass = 'rahul3003';
$db = 'db_m150050ca';
		$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");
		//echo"connection sucess";
		if(isset($_POST['login']))
		{
		$admin_id = $_POST['admin'];
		$admin_pass = $_POST['password'];
		$query = "select * from login where admin = '$admin_id' AND password = '$admin_pass'";
		$run = mysqli_query($db,$query);
		if( mysqli_num_rows($run) > 0 )
		  {
			echo "<script>alert('login sucess')</script>";
			echo "<script>window.open('admin_page.php','_self')</script>";
		  }
		else
		  {
			echo "<script>alert('User Name Or Password is incorrect...')</script>";
		  }
		}
?>
