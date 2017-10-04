<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BOOK-4-U DATABASE</title>
</head>

<body>
<form action="insert_author.php" method="post">
<table border="15" align="center" bgcolor="#3399FF" width="387" height="286">
<tr align="center">
	<td height="57" colspan="20" bgcolor="#66FF00"><b><em>Author Entry</em></b></td>
</tr>
<tr>
	<td width="148" height="36" align="center">Author Id:</td>
    <td width="195"><input type="text" name="author_id" required="*required" placeholder="Enter author id" /></td>
</tr>
<tr>
	<td height="33" align="center">Author Name:</td>
    <td><input type="text" name="name" placeholder="Enter author name" /></td>
</tr>
<tr>
	<td height="36" align="center">City:</td>
    <td><input type="text" name="city" required="*required" placeholder="Enter city" /></td>
</tr>
<tr>
	<td height="37" align="center">State:</td>
    <td><input type="text" name="state" required="*required" placeholder="Enter state" /></td>
</tr>
<tr>
	<td height="43" colspan="20" align="center">
    <input type="submit" name="submit" value="Insert Record" />
    <input type="reset" name="reset" value="Reset"/>
    <a href="admin_page.php"><input type="button" name="back" value="Back" /></a></td>
</tr>
</table>
</form>
</body>
</html>

<?php
$user = 'm150050ca';
$pass = 'rahul3003';
$db = 'db_m150050ca';
$db = new mysqli($server, $username, $pass, $db) or die("unable to connect");
if(isset($_POST['submit']))
{
	$author_id = $_POST['author_id'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	
	$que = "insert into author(author_id,name,city,state) values ('$author_id','$name','$city','$state')";
	if(mysqli_query($db,$que))
	{
		echo "<script>alert('Data has been inserted')</script>";
	}
	else
	{
		echo "<script>alert('author id must be unique please check author id may be repeated')</script>";
	}
}
?>
