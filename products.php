<html>
<?php include 'header.php'; ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 3px rgba(0, 0, 0, 0.2);
  padding: 31px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>

<body>
<div style="padding:20px;margin-top:30px;background-color:#d9dbdb;height:1500px;">
<p>
<h1> Products</h1>
</p>
<div class="row">
  <div class="column">
    <div class="card">
      <h3>Acer Mixed Reality VR Headset</h3>
      <img src="products/images/1_acer_vr.jpg" alt="Acer" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
      <a href="https://www.tejasmadappa.com/cmpe272/products/product_1.php">Details</a>
      <p>$240</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Google Cardboard</h3>
     <img src="products/images/2_Google_cardboard.jpg" alt="Google_cardboard" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
      <a href="https://www.tejasmadappa.com/cmpe272/products/product_2.php">Details</a>
      <p>$15</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Google Daydream VR Headset </h3>
      <img src="products/images/3_google_daydream_vr.jpg" alt="google_daydream" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
     <a href="https://www.tejasmadappa.com/cmpe272/products/product_3.php">Details</a>
      <p>$69.99</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>HTC Vive Headset</h3>
      <img src="products/images/4_htc_vive.jpg" alt="Htc_Vive" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
      <a href="https://www.tejasmadappa.com/cmpe272/products/product_4.php">Details</a>
      <p>$699.99</p>
    </div>
  </div>
</div>

</br>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Khanka VR Travelcase</h3>
      <img src="products/images/5_khanka_vr_travelcase.jpg" alt="vr_travelcase" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
      <a href="https://www.tejasmadappa.com/cmpe272/products/product_5.php">Details</a>
      <p>$29.99</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Lenovo Mirage Camera</h3>
      <img src="products/images/6_lenovo_mirage.jpg" alt="Acer" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
      <a href="https://www.tejasmadappa.com/cmpe272/products/product_6.php">Details</a>
      <p>$399.99</p>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
      <h3>Oculus Go Headset</h3>
      <img src="products/images/7_oculus_go_standalone.jpg" alt="Acer" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
      <a href="https://www.tejasmadappa.com/cmpe272/products/product_7.php">Details</a>
      <p>$199.99</p>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
      <h3>Pimax VR Headset</h3>
     <img src="products/images/8_pimax_vr.jpg" alt="Acer" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
     <a href="https://www.tejasmadappa.com/cmpe272/products/product_8.php">Details</a>
      <p>$799.99</p>
    </div>
  </div>
  
<br>.</br>
<div class="row">
  <div class="column">
    <div class="card">
      <h3>PlayStation VR - Creed</h3>
       <img src="products/images/9_playstation_vr.jpg" alt="Playstation" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
      <a href="https://www.tejasmadappa.com/cmpe272/products/product_9.php">Details</a>
      <p>$505</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Samsung HMD</h3>
       <img src="products/images/10_samsung_vr.jpg" alt="Samsung" style="width:190px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
      <a href="https://www.tejasmadappa.com/cmpe272/products/product_10.php">Details</a>
      <p>$499.99</p>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
      <h3>VR Box-2</h3>
       <img src="products/images/11_vr_box.jpg" alt="VR_Box" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
      <a href="https://www.tejasmadappa.com/cmpe272/products/product_11.php">Details</a>
      <p>$10.55</p>
    </div>
  </div>
  
   <div class="column">
    <div class="card">
      <h3>Ematic VR Mobile Headset </h3>
         <img src="products/images/12_ematic.jpg" alt="VR_Box" style="width:170px; height: 170px; margin-right: 25px; border: solid black 1px; padding = 2px;"> <br>
       <a href="https://www.tejasmadappa.com/cmpe272/products/product_12.php">Details</a>
      <p>$35.99</p>
    </div>
  </div>

<?php include 'footer.php'; ?>
</body>
</html>