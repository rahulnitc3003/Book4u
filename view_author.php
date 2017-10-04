<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BOOK-4-U DATABASE</title>
</head>

<body>
<h2 align="center">WELCOME TO BOOK-4-U DATABASE</h2>
<table width="800" height="63" border="5" align="center" bgcolor="#FFFDD">
<tr>
	<td colspan="20" align="center" bgcolor="orange"><h2>Author Details</h2></td>
</tr>
<tr align="center" bgcolor="pink">
	<td align="center"><b>Serial No.</b></td>
	<td align="center"><b>Auhtor Id</b></td>
    <td align="center"><b>Author Name</b></td>
    <td align="center"><b>City</b></td>
    <td align="center"><b>State</b></td>
</tr>

<?php
$user = 'm150050ca';
$pass = 'rahul3003';
$db = 'db_m150050ca';
$conn = new mysqli('localhost',$user,$pass,$db) or ('error in database connection');
/*if($conn)
{
	echo "connected";
}
else
{
	echo "connection failed";
}*/
$que = "select *from author order by 1 ASC";
$run = mysqli_query($conn,$que);
$i=1;
while($row = mysqli_fetch_array($run))
{
	$author_id = $row[0];
	$name = $row[1];
	$city = $row[2];
	$state = $row[3];
	?>
	<tr>
		<td align="center"><?php echo $i;$i++; ?></td>
		<td align="center"><?php echo $author_id; ?></td>
		<td align="center"><?php echo $name; ?></td>
		<td align="center"><?php echo $city; ?></td>
		<td align="center"><?php echo $state; ?></td>
	</tr>
<?php } ?>
	<tr>
		<td align="center" colspan="20"><a href="admin_page.php"><input type="button" name="back" value="Back" /></a></td>
	</tr>
</table>
</body>
</html>
