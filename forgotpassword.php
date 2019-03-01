<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
    
   
  <link rel="stylesheet" type="text/css" href="style.css">

    
</head>
<body>
    <div class="header">
   
      
  	<h2>Reset Password</h2>
  </div>
<form method="post" action="forgotpassword.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
<div class="input-group">
  	  <label>New Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
    
    <div class="input-group">
  	  <button type="submit" class="btn" name="changepassword_user">Confirm</button>
  	</div>
    </form>
    </body>
    
    </html>