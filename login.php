<?php
	session_start();
	require_once('connect.php');
	if(isset($_POST) & !empty($_POST))
	{
		 $username = mysqli_real_escape_string($connection,$_POST['username']);
		 
		 $password =($_POST['password']) ;
		 $sql = "SELECT * FROM `users` WHERE username='$username' AND  password='$password' " ;
        $result = mysqli_query($connection, $sql) ;
		//$count = mysqli_num_rows($result);
		
        //if( $count == 1)
		if( mysqli_num_rows($result) == 1 )
		{
           $_SESSION['username'] = $username;
        }
		else{
            $fmsg = "Invalid Username/Password";
        }
    }
	if(isset($_SESSION['username']))
	{
		$smsg= "User logged in !!!";
		header("Location: index.html");
	}
?>





<html>
     <head>
	 
		           
	 <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">	
     <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
           <title> Tours and Travels </title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<link rel ="stylesheet"type="text/css" href="styles.css">
		   <style>
		   
		           .main {
                         width: 1365px;
						 height: 26px;
						 margin-top: -7px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: -7px;
						 background: black;
						 font-family: 'Philosopher', sans-serif;
						 font-size: 18px;
						 text-indent: 40px ;
						 
						 
                        }
						
                 .title {
                            font-family: 'Playball', cursive;
							font-size: 68px;
					        text-indent: 50px ;
                           }
				 .login {
				            width: 160px;
							height: 37px;
							
						     margin-top: -85px;
                             margin-bottom: 0px;
                             margin-right: 300px;
                             margin-left:840px;
                           font-family: 'Lobster Two', cursive;
							font-size: 26px;
							background-color: 	#404040;
							border: 1px solid gray;
							position: absolute;
							text-indent: 40px ;
                           }
				 .register {
				            width: 160px;
							height: 37px;
							
						     margin-top: -85px;
                             margin-bottom: 0px;
                             margin-right: 150px;
                             margin-left:1000px;
                            font-family: 'Lobster Two', cursive;
							font-size: 26px;
							background-color: 	#404040;
							position: absolute;
							border: 0.2px solid gray;
							text-indent: 40px ;
                           }
					.logout {
				            width: 160px;
							height: 37px;
							
						     margin-top: -85px;
                             margin-bottom: 0px;
                             margin-right: 150px;
                             margin-left:1160px;
                           font-family: 'Lobster Two', cursive;
							font-size: 26px;
							background-color: 	#404040;
							border: 1px solid gray;
							position: absolute;
							text-indent: 40px ;
                           }
						.maindrop {
                         width: 1365px;
						 height: 40px;
						 margin-top: 50px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: -7px;
						 background: #333333;
						 font-family: 'Philosopher', sans-serif;
						 font-size: 18px;
						 text-indent: 40px ;
						 
						 
                        }
						
						 .dropdown2 {
						         width: 160px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 150px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: 	#404040;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
						  .dropdown3{
						         width: 160px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 300px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: 	#404040;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
							.dropdown4{
						         width: 160px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 450px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: #404040;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
							.dropdown5{
						         width: 180px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 600px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: 	#404040;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
									   
							 .active{
						         width: 160px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 770px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: 	#404040;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
									   
							.dropdown{
						         width: 160px;
							     height: 40;
                                 display: inline-block;
								 margin-left: -7px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: 	#404040;
                                 position: absolute;
                                 text-align: center;
                                 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
									
					.ctitle {
                            font-family: 'Lobster Two', cursive;
							font-size: 58px;
					        text-indent: 50px ;
							margin-top: 20px;
							margin-left: 20px;
						 
                           }
					
						   
					.contain {
					
					             width: 800px;
							     height: 300px;
                                 display: inline-block;
								 margin-left: 260px;
								 margin-top: 30px;
								 border: 2px solid gray;
								 background-color: 	none;
                                 position: absolute;
                                 font-family: 'Philosopher', sans-serif;
							     font-size: 18px;
					
					
					  
					          
							  }
							  
					input[type=text],input[type=password] {
                                      width: 80%;
                                       padding: 12px 20px;
                                        margin: 8px 0;
                                      box-sizing: border-box;
									  background-color: #f8f8f8;
									  border: 2px solid #ccc;
                                      }
					textarea {
                                width: 80%;
                                height: 150px;
                                padding: 20px 20px;
								margin-left: 100px;
                                box-sizing: border-box;
                                border: 2px solid #ccc;
                                border-radius: 4px;
                                background-color: #f8f8f8;
                                resize: none;
							}
							
				   input[type=submit]{
                               background-color: #333333;
                               border: none;
                               color: white;
                               padding: 16px 32px;
                               text-decoration: none;
                               margin: 4px 2px;
							   cursor: pointer;
                               font-family: 'Philosopher', sans-serif;
							     font-size: 18px;
                                  }
					.last {
                         width: 1365px;
						 height: 30px;
						 margin-top: 350px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: -20px;
						 background: black;
						 font-family: 'Philosopher', sans-serif;
						 font-size: 18px;
						 text-indent: 40px ;
						 font-family: 'Lobster Two', cursive;
						 
                        }			
 
                  
           </style>
		   
				   <body>
				    <script type="text/javascript">
                     
                     function validate()
                    {
      
                       if( document.myForm.Name.value == "" )
                      {
                         alert( "Please provide your name!" );
                         document.myForm.Name.focus() ;
                         return false;
                       }
         
                       if( document.myForm.Password.value == "" )
                      {
                            alert( "Please provide your Password!" );
                            document.myForm.EMail.focus() ;
                            return false;
                      }
					  
					  
					 }
				           
					</script>	 
						 <div class="main">
						               <center> 
									          <font color="white" ><marquee>Welcome to Tours and travels</marquee>
											  </font>
									   </center> 
						   </div>
				           <div class="title">
                           <font color="609BEF">Tours and Travels</font>
                           </div>
						    <a href="login.html"><div class="login" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Login </font> </div></a>
						   <a href="register.html"><div class="register" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Register </font></div></a>
						   <a href="logout.php"><div class="logout" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Logout </font> </div></a>
                           
						   <div class="maindrop"></div>
						   <a href="index.html"> <div class="dropdown" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Home</font></div></a>
						   <a href="tours.html"> <div class="dropdown2" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Tours</font></div></a>
						   <a href="destination.html"> <div class="dropdown3" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Destinations</font></div></a>
						   <a href="hotels.html"> <div class="dropdown4" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Hotels</font></div></a>
						   <a href="diaries.html"> <div class="dropdown5" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Reviews</font></div></a>
						   <a href="contact.html"> <div class="active" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Contact Us</font></div></a>
							 
						   <div class="ctitle"><font color="#333333">Login</font></div>
                           <div class="container">
						   <br>
						   <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert" > <?php echo $smsg;?></div><?php } ?>
							<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
							 <center>
						     Please enter correct details<br><br>
							
							
							
	<form class="form-signin" method="POST">
        
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Login</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
      </form>
						   </div>
						   
						   <div class="last"><center><font color="white">Copyright 2016-17</font></center></div>
						   <script src="app.js">

</script>
				   </body>
	 </head>		   
</html>
	  
	  
        
        