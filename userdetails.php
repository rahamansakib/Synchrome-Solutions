<?php
//including the database connection file
include("connectiondb.php");
 $db = mysqli_connect('localhost', 'root', '', 'stock');
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($db,"SELECT * FROM lcusers ORDER BY id DESC"); // using mysqli_query instead
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
   <meta name="description" content="Market investment solution">
	  <meta name="keywords" content="Market investment solution">
  	<meta name="author" content="Sakibur Rahaman">
    <title>Synchrome Solutions </title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Synchrome</span> Solutions</h1>
            <h2>Welcome Admin</h2>
        </div>
        <nav>
          <ul>
               
            <li class="current"><a href="adminpanel.php">Home</a></li>
              <li><a href="userdetails.php">User Details</a></li>
            
        
              <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>

   
      <form name="myForm" method="post" action="userdetails.php" onsubmit="return validateForm();">
<center>
<fieldset>
  <center><b>List Of Users</b></center>


	<?php
	@ $db = new mysqli('localhost', 'root', '', 'stock');
	if (mysqli_connect_errno()) {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
	}
	$query = "select * from lcusers";
	$result = $db->query($query);	
	$num_results = $result->num_rows;

	?>
	<CENTER><font color="red" size="2" face="arial"><b><?php echo "TOTAL: ".$num_results.""; ?></b></font></CENTER><br/><br/>
	<font size="2" face="arial" color="BLACK"><b><?php //echo "AVAILABLE GROUP: ".$num_results.""; ?></b></font>
	<p>
	<table bgcolor="#F0F0FA" border="1" width="100%" cellspacing="0" cellpadding="0" bordercolor="#ffffff">
	<tr bgcolor="WHITE" height="35px">
		 <input name="table" type="hidden" value="userdetails">
	 <input name="return" type="hidden" value="userdetails.php">

      <table width="700" border="0" cellspacing="0" cellpadding="0">

      <tr>

        <td bgcolor="#0099FF"><div align="center"><strong><span class="style1">View User Details </span></strong></div></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td align="center"><table width="100%"  border="" cellspacing="" cellpadding="1">

          <tr>
               <td width="100"><strong>ID </strong></td>
            <td width="100"><strong>Username</strong></td>
              <td width="100"><strong>Email</strong></td>
              
              
                </tr>
		  </td>
	</tr>
		<?php
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
          while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
              echo "<td>".$res['id']."</td>";
			echo "<td>".$res['username']."</td>";
              echo "<td>".$res['email']."</td>";
               echo "<td> <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
       }
        ?>
		

	</table>

	</p>

<?php


?>
	</table></tbody>
</fieldset>
	</form>
</center>

   

   
    
  </body>
</html>
