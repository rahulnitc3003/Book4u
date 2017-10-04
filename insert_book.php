<!DOCTYPE html>
<head>
<title>New Account</title>
</head>

<body>
<form action="insert_book.php" method="post"></br>
<table border="15" align="center" bgcolor="#00CC66" width="387" height="334">
<tr align="center">
	<td colspan="20" bgcolor="#CC6666"><b><i>Book Entry</b></i></td>
</tr>
<tr>
	<td width="148" height="36" align="center">Book Id:</td>
    <td width="195"><input type="text" name="bid" required="*required" placeholder="Enter Book Id" /></td>
</tr>
<tr>
	<td width="148" height="36" align="center">Book Name:</td>
    <td width="195"><input type="text" name="name" required="*required" placeholder="Enter Book name" /></td>
</tr>
<tr>
	<td width="148" height="36" align="center">Author Id:</td>
    <td width="195"><input type="text" name="aid" required="*required" placeholder="Enter Author Id" /></td>
</tr>
<tr>
	<td width="148" height="36" align="center">Publisher Id:</td>
    <td width="195"><input type="text" name="pid" required="*required" placeholder="Enter Publisher Id" /></td>
</tr>
<tr>
	<td width="148" height="36" align="center">Publication Date:</td>
    <td width="195"><input type="date" name="date" required="*required" placeholder="Date" /></td>
</tr>
<tr>
	<td width="148" height="36" align="center">Category</td>
    <td width="195"><input type="text" name="cat" required="*required" placeholder="Enter Category" /></td>
</tr>
<tr>
	<td width="148" height="36" align="center">Price:</td>
    <td width="195"><input type="text" name="price" required="*required" placeholder="Enter Price" /></td>
</tr>

<tr>
	<td height="43" colspan="20" align="center">
    <input type="submit" name="submit" value="Insert Book" />
    <input type="reset" name="reset" value="Reset"/>
    <a href="admin_page.php"><input type="button" name="back" value="Back" /></a></td>
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
if(isset($_POST['submit']))
{
	$bid = $_POST['bid'];
	$name = $_POST['name'];
	$aid = $_POST['aid'];
	$pid = $_POST['pid'];
	$date = $_POST['date'];
	$cat = $_POST['cat'];
	$price = $_POST['price'];
	$que = "insert into book(book_id,bookname,author_id,publisher_id,pub_date,category,price)values('$bid','$name','$aid','$pid','$date','$cat','$price')";
	if(mysqli_query($db,$que))
	{
		echo "<script>alert('Data has been inserted')</script>";
	}
	else
	{
		echo "<script>alert('please cheack foreign key or primary key values')</script>";
	}
}
?>
