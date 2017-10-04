<html>
<head>
<title>books4u database</title>
</head>
<body>
<form action="q4.php" method="post">
	<table width="576" height="74" border="10" align="center" bordercolor="#FF6600" bgcolor="#FFFF99">
    	<tr><br /><br />
        	<td width="759" height="100" align="center">
            	<b>Find Name Of Book Of Having Highest Price</b></br></br>
    			<input type="submit" name="find" value="Find Result" />
				<a href="guest_page.php"><input type="button" name="back" value="Back" /></a>
    		</td>
        </tr>
</table></br></br>
<center>

<?php
$conn=new mysqli('localhost','m150050ca','rahul3003','db_m150050ca') or die('error in database connection');
if(isset($_POST['find']))
{
	//$category = $_POST['category'];
	$que = "select bookname,price from book where price in(select max(price) from book)";
	$run = mysqli_query($conn,$que);
	?>
	<table border="10" width="200">
	<tr>
		<td align="center" bgcolor="pink"><b>Book Name</b></td>
		<td align="center" bgcolor="pink"><b>Price</b></td>
	</tr>
	<?php
	while($row = mysqli_fetch_array($run))
	{
		$bookname = $row['bookname'];
		$price = $row['price'];
	?>
	
			<tr>
				<td align="center"><?php echo $bookname; ?></td>
				<td align="center"><?php echo $price; ?></td>
			</tr>
	<?php } ?>
	<?php } ?>
</table>
</center>
</form>
</body>
</html>
