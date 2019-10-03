
<? php

<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4687db;
}
</style>
</head>
<body>

<ul>
<li class="main-logo"><img src="logo.png" style="width:150px;height:60px;"></li>
  <li><a href="index.php">Home</a></li>
   <li><a href="products.php">Products</a></li>
  <li><a href="news.php">News</a></li>
  <li><a href="contacts.php">Contacts</a></li>
  <li><a href="about.php">About</a></li>
</ul>


</div>

</body>
</html>

?>