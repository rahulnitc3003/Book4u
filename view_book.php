<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BOOK-4-U DATABASE</title>
</head>

<body>
<h2 align="center">WELCOME TO BOOK-4-U DATABASE</h2>
<table width="1000" height="63" border="5" align="center" bgcolor="skyblue">
<tr>
	<td align="center" colspan="20" bgcolor="pink"><h2>Book Details</h2></td>
</tr>
<tr align="center" bgcolor="#FFFFCC">
	<td align="center"><b>Serial No.</b></td>
	<td align="center"><b>Book Id</b></td>
    <td align="center"><b>Book Name</b></td>
    <td align="center"><b>Author Id</b></td>
    <td align="center"><b>Publisher Id</b></td>
    <td align="center"><b>Publication Date</b></td>
    <td align="center"><b>Category</b></td>
    <td align="center"><b>Price</b></td>
</tr>


<?php
$user = 'm150050ca';
$pass = 'rahul3003';
$db = 'db_m150050ca';
$conn = new mysqli('localhost',$user,$pass,$db) or die ('error in database connection');
/*if($conn)
{
	echo "connected";
}
else
{
	echo "connection failed";
}*/
$que = "select *from book order by 1 ASC";
$run = mysqli_query($conn,$que);
$i = 1;
while($row = mysqli_fetch_array($run))
{
	$book_id = $row[0];
	$bookname = $row[1];
	$author_id = $row[2];
	$publisher_id = $row[3];
	$pub_date = $row[4];
	$category = $row[5];
	$price = $row[6];
	?>
	<tr>
		<td align="center"><?php echo $i; $i++; ?></td>
		<td align="center"><?php echo $book_id; ?></td>
		<td align="center"><?php echo $bookname; ?></td>
		<td align="center"><?php echo $author_id; ?></td>
		<td align="center"><?php echo $publisher_id; ?></td>
		<td align="center"><?php echo $pub_date; ?></td>
		<td align="center"><?php echo $category; ?></td>
		<td align="center"><?php echo $price; ?></td>
	</tr>
<?php } ?>
<tr>
<td align="center" colspan="20"><a href="admin_page.php"><input type="button" name="back" value="Back" /></a></td>
</td>
</table>
</body>
</html>
