<?php
//including the database connection file
include("connectiondb.php");
 $db = mysqli_connect('localhost', 'root', '', 'stock');
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($db, "DELETE FROM lcusers WHERE id=$id") or die();
 
//redirecting to the display page (index.php in our case)
header("Location:userdetails.php");
?>