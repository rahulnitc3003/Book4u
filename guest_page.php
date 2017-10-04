<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panal</title>
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
<body background="images/home_page.jpg>
<center><h2>GUEST SECTION</h2><center>
<em><p>Welcome To <b>BOOK-4-U</b> Database Guest Panal</p></em>
<div class="dropdown">
  <button class="dropbtn">VIEW RECORD</button>
  <div class="dropdown-content" style="left:0;">
    <a href="guest_view_book.php">BOOK</a>
    <a href="guest_view_author.php">AUTHOR</a>
    <a href="guest_view_publisher.php">PUBLISHER</a>
  </div>
</div>
<div class="dropdown">
<a href="index.php"><button class="dropbtn">HOME PAGE</button></a>
</div>
<div class="dropdown">
  <button class="dropbtn">DISPLAY SOME INFORMATIONS</button>
  <div class="dropdown-content" style="left:0;">
    <a href="q1.php">QUERY-1</a>
    <a href="q2.php">QUERY-2</a>
    <a href="q3.php">QUERY-3</a>
    <a href="q4.php">QUERY-4</a>
    <a href="q6.php">QUERY-5</a>
  </div>
</div>
</body>
</html>
