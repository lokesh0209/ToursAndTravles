<?php
session_start();
if(isset($_SESSION['username']))
	{
?>
<html>
     <head>
	 
		           
	 <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">	
     <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
           <title> Tours and Travels </title>
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
				 
				 .logout {
				            width: 162px;
							height: 37px;
							
						     margin-top: -85px;
                             margin-bottom: 0px;
                             margin-right: 0px;
                             margin-left:1160px;
                            font-family: 'Lobster Two', cursive;
							font-size: 26px;
							background-color: 	#404040;
							position: absolute;
							border: 0.2px solid gray;
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
								 background-color: 	black;
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
					.ctext {
                            font-family: 'Philosopher', sans-serif;
							font-size: 20px;
					        text-indent: 50px ;
							margin-top: 20px;
							margin-left: 20px;
						 
                           }
						   
					.contain {
					
					             width: 800px;
							     height: 600px;
                                 display: inline-block;
								 margin-left: 70px;
								 margin-top: 30px;
								 border: 2px solid gray;
								 background-color: 	none;
                                 position: absolute;
                                 font-family: 'Philosopher', sans-serif;
							     font-size: 18px;
					
					
					  
					          
							  }
							  
					input[type=text] {
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
						 margin-top: 700px;
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
         
                       if( document.myForm.EMail.value == "" )
                      {
                            alert( "Please provide your Email!" );
                            document.myForm.EMail.focus() ;
                            return false;
                      }
					  
					  if( document.myForm.Contact.value == "" )
                      {
                            alert( "Please provide your Contact Number!" );
                            document.myForm.EMail.focus() ;
                            return false;
                      }
					  
					  if( document.myForm.Contact.value == "" )
                      {
                            alert( "Please provide your Email!" );
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
						   <a href="logout.php"><div class="logout" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Logout </font></div></a>
                           
						   <div class="maindrop"></div>
						   <a href="home.php"> <div class="dropdown" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Home</font></div></a>
						   <a href="tours.php"> <div class="dropdown2" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Tours</font></div></a>
						   <a href="destination.php"> <div class="dropdown3" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Destinations</font></div></a>
						   <a href="hotels.php"> <div class="dropdown4" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Hotels</font></div></a>
						   <a href="diaries.php"> <div class="dropdown5" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Reviews</font></div></a>
						   <a href="contact.php"> <div class="active"><font color="white">Contact Us</font></div></a>
							 
						   <div class="ctitle"><font color="#333333">Contact Us</font></div>
						   <div class="ctext">Got any idea or need to ask something?Feel free to contact us anytime.Fill the following form and we will respond to you as soon as possible.</div>
                           <div class="contain">
						   <br>
						   <center>
						   Please fill the following details<br><br>
						   <form action="Contact.html" name="myForm" onsubmit="return(validate());">
						   <label>Name    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Name" placeholder="Name"><br>
						   <label>Email    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="EMail" placeholder="Email"><br>
						   <label>Subject    </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Sub" placeholder="Subject"><br>
						   <label>Contact No.    </label>&nbsp;&nbsp;&nbsp;<input type="text" name="Contact" placeholder="Contact Number"><br></center>
						   <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suggestion     </label><br><center><textarea col="1500" row="150"></textarea><br><BR><BR>
						   <input type="submit" value="Submit"></input>
						   </form>
						   </div>
						   
						   <div class="last"><center><font color="white">Copyright 2017-18</font></center></div>
						   <script src="app.js">

</script>
				   </body>
	 </head>		   
</html>
<?php } 
else
{
    header("Location: 404.php");
}
	?>