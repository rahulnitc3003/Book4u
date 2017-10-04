<html>
<head>
	<title>Book4u</title>
</head>
<body>
<form action='modify_book.php' method="post">
<table border="15" align="center" bgcolor="#00CC66" width="387" height="334">
<tr align="center">
	<td colspan="20" bgcolor="#CC6666">Book Entry</td>
</tr>
<tr>
	<td width="148" height="36" align="center">Book Id:</td>
    <td width="195"><input type="text" name="book_id" /></td>
</tr>
<tr>
	<td height="33" align="center">Book Name:</td>
    <td><input type="text" name="bookname" /></td>
</tr>
<tr>
	<td height="36" align="center">Author Id:</td>
    <td><input type="text" name="author_id" /></td>
</tr>
<tr>
	<td height="36" align="center">Publisher Id:</td>
    <td><input type="text" name="publisher_id" /></td>
</tr>
<tr>
	<td height="37" align="center">Publication Date:</td>
    <td><input type="date" name="pub_date" /></td>
</tr>
<tr>
	<td height="36" align="center">category:</td>
    <td><input type="text" name="category" /></td>
</tr>
<tr>
	<td height="34" align="center">Price:</td>
    <td><input type="text" name="price" /></td>
</tr>
<tr>
	<td height="43" colspan="20" align="center">
    <input type="submit" name="submit" value="Update Record" />
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
	$book_id = $_POST['book_id'];
	$bookname = $_POST['bookname'];
	$author_id = $_POST['author_id'];
	$publisher_id = $_POST['publisher_id'];
	$pub_date = $_POST['pub_date'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$query1 = "update book set bookname='$bookname', author_id = '$author_id' , publisher_id = '$publisher_id' , pub_date = '$pub_date' , category = '$category' , price = '$price' where book_id = '$book_id'";
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
