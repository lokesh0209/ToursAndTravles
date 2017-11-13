<?php
	require_once('connect.php');
	if(isset($_POST) & !empty($_POST))
	{
		 $username = mysqli_real_escape_string($connection,$_POST['username']);
		
		 $email = mysqli_real_escape_string($connection,$_POST['email']);
		//echo "<br>";
		 $password = ($_POST['password']);
		 $sql = "INSERT INTO `users` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $sql);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed...UserName already exists!!!Try different one.";
        }
    }
?>





<!DOCTYPE html>
<html>
<head>
	<title>User Registration in PHP & MySQL</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<link rel ="stylesheet"type="text/css" href="styles.css">

</head>
<body onload='document.form1.text1.focus()'>

<script type="text/javascript">
                     
    function ValidateEmail(inputText)  
    {  
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(inputText.value.match(mailformat))  
    {  
    document.form1.text1.focus();  
    return true;  
    }  
    else  
    {  
    alert("You have entered an invalid email address!");  
    document.form1.text1.focus();  
    return false;  
    }  
    }  
				           
</script>


<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST" name="form1">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
	</div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="ValidateEmail(document.form1.email)">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="index.php">Login</a>
      </form>
</div>
</body>
</html>