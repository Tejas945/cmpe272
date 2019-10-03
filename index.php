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
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="products.php">Products</a></li>
  <li><a href="news.php">News</a></li>
  <li><a href="contacts.php">Contacts</a></li>
  <li><a href="about.php">About</a></li>
</ul>

<div style="padding:20px;margin-top:30px;background-color:#d9dbdb;height:1500px;">
  <h1>Welcome to VRGrad </h1>
<p> We specialize in all things Virtual Reality. <br>Checkout our Products page!</p>
  
 <video width="400" controls>
  <source src="Video.mp4" type="video/mp4">
  
  Your browser does not support HTML5 video.
</video>

 
  
</div>

</body>
</html>
