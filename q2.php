<html>
<head>
<title>books4u database</title>
</head>
<body>
<form action="q2.php" method="post">
	<table width="576" height="74" border="10" align="center" bordercolor="#FF6600" bgcolor="#FFFF99">
    	<tr><br /><br />
        	<td width="759" height="100" align="center">
				<p><i><u>Count total book of inputted category</u></i></p>
            	<b>Enter Book Category</b>
            	<input type="text" name="category" required="*required" />
    			<input type="submit" name="total" value="Find Result" /></a>
				<a href="guest_page.php"><input type="button" name="back" value="Back" /></a>
    		</td>
        </tr>
</table></br></br>
<center>

<?php
$conn=new mysqli('localhost','m150050ca','rahul3003','db_m150050ca') or die('error in database connection');
if(isset($_POST['total']))
{
	$category = $_POST['category'];
	$que = "select count(*) from book where category='$category'";
	$run = mysqli_query($conn,$que);
	?>
	<table border="10" width="200">
	<tr>
		<td align="center" bgcolor="pink"><b>Total Book</b></td>
	</tr>
	<?php
	//$i=0;
	while($row = mysqli_fetch_array($run))
	{
		$bookname = $row[0];
	?>
	
			<tr>
				<td align="center"><?php echo $bookname; ?></td>
			</tr>
	<?php } ?>
	<?php } ?>
</table>
</center>
</form>
</body>
</html>
