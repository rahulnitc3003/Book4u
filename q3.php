<html>
<head>
<title>books4u database</title>
</head>
<body>
<form action="q3.php" method="post">
	<table width="576" height="74" border="10" align="center" bordercolor="#FF6600" bgcolor="#FFFF99">
    	<tr><br /><br />
        	<td width="759" height="100" align="center">
				<p><i><u>Find Book Name Which is Published After Inputted Date</u></i></p>
            	<b>Enter Publication Date</b>
            	<input type="date" name="pub_date" required="*required" />
    			<input type="submit" name="find" value="Find book" /></a>
				<a href="guest_page.php"><input type="button" name="back" value="Back" /></a>
			</td>
        </tr>
</table></br>
<h2>
<center>

<?php
$conn=new mysqli('localhost','m150050ca','rahul3003','db_m150050ca') or die('error in database connection');
if(isset($_POST['find']))
{
	$pub_date = $_POST['pub_date'];
	$que = "select bookname from book where pub_date > '$pub_date'";
	$run = mysqli_query($conn,$que);
	?>
	<table border="10" width="200">
	<tr>
		<td align="center" bgcolor="pink"><b>Serial No.</b></td>
		<td align="center" bgcolor="pink"><b>Book Name</b></td>
	</tr>
	<?php
	$i=1;
	while($row = mysqli_fetch_array($run))
	{
		$bookname = $row['bookname'];
	?>
	
			<tr>
				<td align="center"><?php echo $i;$i++; ?></td>
				<td align="center"><?php echo $bookname; ?></td>
			</tr>
	<?php } ?>
	<?php } ?>
</table>
</center>
</form>
</body>
</html>
