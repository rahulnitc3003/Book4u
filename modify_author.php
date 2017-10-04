<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BOOK-4-U DATABASE</title>
</head>

<body>
<form action='modify_author.php' method="post">
<table border="15" align="center" bgcolor="#3399FF" width="387" height="286">
<tr align="center">
	<td height="57" colspan="20" bgcolor="#66FF00"><b><em>Author Entry</em></b></td>
</tr>
<tr>
	<td width="148" height="36" align="center">Author Id:</td>
    <td width="195"><input type="text" name="author_id" /></td>
</tr>
<tr>
	<td height="33" align="center">Author Name:</td>
    <td><input type="text" name="name" /></td>
</tr>
<tr>
	<td height="36" align="center">City:</td>
    <td><input type="text" name="city" /></td>
</tr>
<tr>
	<td height="37" align="center">State:</td>
    <td><input type="text" name="state" /></td>
</tr>
<tr>
	<td height="43" colspan="20" align="center">
    <input type="submit" name="submit" value="Insert Record" />
    <input type="reset" name="reset" value="Reset"/>
    <a href="admin_page.php"><input type="button" name="back" value="Back" /></a></td>
</tr>
</table>
<?php
$user = 'm150050ca';
$pass = 'rahul3003';
$db = 'db_m150050ca';
$conn = new mysqli('localhost',$user,$pass,$db) or die ('error in database connection');
if(isset($_POST['submit']))
{
	$author_id = $_POST['author_id'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$query1 = "update author set author_id='$author_id', name = '$name' , city = '$city' , state = '$state' where author_id = '$author_id'";
	if(mysqli_query($conn,$query1))
	{
		//echo "<script>window.open('view.php?updated=Record has been Updated!!!','_self')</script>";
        echo "<script>alert('RECORD HAS BEEN SUCESSFULLY UPDATED !!!')</script>";
	}
}
?>
</form>
</body>
</html>
