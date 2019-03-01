<?php
//including the database connection file
include("connectiondb.php");
 $db = mysqli_connect('localhost', 'root', '', 'stock');
//getting id of the data from url
$id = $_GET['id'];
 
//updating the row from table
$result = mysqli_query($db, "UPDATE  marketprice SET stockcode='$stockcode' lasttradeprice='$lasttradeprice' openingprice='$openingprice'  highestprice='$highestprice' lowestprice='$lowestprice' yesterdaycostprice='$yesterdaycostprice' trade='$trade' valuemn='$valuemn' volume='$volume' WHERE id=$id") or die();
 
//redirecting to the display page (index.php in our case)
header("Location:updatepricedetails.php");
?>