<html>
<?php include 'header.php'; ?>
<body>
<div style="padding:20px;margin-top:30px;background-color:#d9dbdb;height:1500px;">
<?php

$file = "contacts.txt";

if($handle = fopen($file, 'r')) {

    echo $content = fread($handle, 1000);

    fclose($handle);

}
else{
    echo "The application was not able to read on the file";
}

?>

<?php include 'footer.php'; ?>
</body>
</html>