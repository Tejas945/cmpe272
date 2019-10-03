<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: blue;
  color: white;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
div.b {
  text-align: left;
}

.button {
  background-color: #f5e664; /* Green */
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.button4 {border-radius: 12px;}

</style>
</head>
<body> 

<div class="navbar">
  <a href="../index.php">Home</a>
  <a href="../news.php">News</a>
   <a href="../products.php">Products</a>
  <a href="../contacts.php">Contact</a>
  <a href="../about.php">About</a>
 
</div>

<div class="main">
  <h1> VR BOX-2 ® Virtual Reality Goggle</h1>
  


    <p><img src="images/11_vr_box.jpg" alt="Vr_box" style="width:350px; height: 300px; margin-right: 25px; border: solid black 1px; ">
    <b>Price:</b> 
    <div class="b">
    <p style="color:red;">$10.55 </p>
    </div>

       <button class="button button4" onclick="alert('Shopping coming soon !')">Add to cart</button>
       
<ul>
        
            <li>Lowest Price</li>
            <li>Compatible with all smartphones</li>
            <li>Supports Mi Max 2</li>
            <ul/>


</div>

</body>
</html>
