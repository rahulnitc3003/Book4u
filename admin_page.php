<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panal</title>
<!DOCTYPE html>
<html>
<style>
.dropbtn {
    background-color: #0F9;
    color: #666;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #F6F;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #9F6}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body background="abc.jpg">

<center><h2>ADMINISTRATOR</h2><center>
<em><p>Welcome To <b>BOOK-4-U</b> Database Admin Aanal</p></em>
<div class="dropdown">
<a href="index.php"><button class="dropbtn">Logout</button></a>
</div>
<div class="dropdown">
  <button class="dropbtn">VIEW RECORD</button>
  <div class="dropdown-content" style="left:0;">
    <a href="view_book.php">BOOK</a>
    <a href="view_author.php">AUTHOR</a>
    <a href="view_publisher.php">PUBLISHER</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">INSERT RECORD</button>
  <div class="dropdown-content" style="left:0;">
    <a href="insert_book.php">BOOK</a>
    <a href="insert_author.php">AUTHOR</a>
    <a href="insert_publisher.php">PUBLISHER</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">MODIFY RECORD</button>
  <div class="dropdown-content" style="left:0;">
    <a href="modify_menu_book.php">BOOK</a>
    <a href="modify_menu_author.php">AUTHOR</a>
    <a href="modify_menu_publisher.php">PUBLICATION</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">DELETE RECORD</button>
  <div class="dropdown-content" style="left:0;">
    <a href="delete_book.php">BOOK</a>
    <a href="delete_author.php">AUTHOR</a>
    <a href="delete_publisher.php">PUBLISHER</a>
  </div>
</div>
</body>
</html>