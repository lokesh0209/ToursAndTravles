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
							.active{
						         width: 180px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 600px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: 	black;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
									   
							 .dropdown5{
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
									
                        .htitle {
                            font-family: 'Lobster Two', cursive;
							font-size: 48px;
					        text-indent: 50px ;
							margin-top: 80px;
							margin-left: 420px;
						 
                           }
					   .hpic {
                            
							margin-top: 10px;
							margin-left: 390px;
						 
                           }

                        .com1 {
                            
							     width: 900px;
							     height: 120px;
                                 display: inline-block;
								 margin-left: 30px;
								 margin-top: 15px;
								 border: 1px solid gray;
								 background-color: white;
                                 position: absolute;
                           }	
                        .upic {
                            
							margin-top: 20px;
							margin-left: 20px;
						 
                           }
                        .ucom{
						    font-family: 'Lobster Two', cursive;
							font-size: 22px;
					       
							padding-left : 3em;
							margin-top: -70px;
							margin-left: 80px;
						     
						  }		
                         .com2 {
                            
							     width: 900px;
							     height: 120px;
                                 display: inline-block;
								 margin-left: 320px;
								 margin-top: 160px;
								 border: 1px solid gray;
								 background-color: white;
                                 position: absolute;
                           }	
                        .upic2 {
                            
							margin-top: 20px;
							margin-left: 20px;
						 
                           }
                        .ucom2{
						    font-family: 'Lobster Two', cursive;
							font-size: 22px;
					       
							padding-left : 3em;
							margin-top: -70px;
							margin-left: 80px;
						     
						  }				
                         
                         .com3 {
                            
							     width: 900px;
							     height: 120px;
                                 display: inline-block;
								 margin-left: 30px;
								 margin-top: 300px;
								 border: 1px solid gray;
								 background-color: white;
                                 position: absolute;
                           }	
                        .upic3 {
                            
							margin-top: 20px;
							margin-left: 20px;
						 
                           }
                        .ucom3{
						    font-family: 'Lobster Two', cursive;
							font-size: 22px;
					       
							padding-left : 3em;
							margin-top: -70px;
							margin-left: 80px;
						     
						  }		
                      .com4 {
                            
							     width: 900px;
							     height: 120px;
                                 display: inline-block;
								 margin-left: 320px;
								 margin-top: 440px;
								 border: 1px solid gray;
								 background-color: white;
                                 position: absolute;
                           }	
                        .upic4 {
                            
							margin-top: 20px;
							margin-left: 20px;
						 
                           }
                        .ucom4{
						    font-family: 'Lobster Two', cursive;
							font-size: 22px;
					       
							padding-left : 3em;
							margin-top: -70px;
							margin-left: 80px;
						     
						  }
                    .last {
                         width: 1365px;
						 height: 30px;
						 margin-top: 600px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: -10px;
						 background: black;
						 font-family: 'Philosopher', sans-serif;
						 font-size: 18px;
						 text-indent: 40px ;
						 font-family: 'Lobster Two', cursive;
						 
                        }					
                  
           </style>
		   
				   <body>
				           
						 
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
						   <a href="diaries.php"> <div class="active"><font color="white">Reviews</font></div></a>
						   <a href="contact.php"> <div class="dropdown5" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Contact Us</font></div></a>
							
						   <div class="htitle"><font color="#333333">Happy Customers</font></div>
							<div class="hpic"><img src="images/line.png"></img></div>
							
							
						   <div class="com1"><div class="upic"><img src="images/u1.png"></img></div>
							<div class="ucom"><b>"</b>This was definitely one of the best trips we have been on and it was first class service from the planning phase through the actual trip!<b>"</b><br><center><b>- Alexander</b></center></div></div>
				   
				            <div class="com2"><div class="upic2"><img src="images/u1.png"></img></div>
					        <div class="ucom2"><b>"</b>This was definitely one of the best trips we have been on and it was first class service from the planning phase through the actual trip!<b>"</b><br><center><b>- Alexander</b></center></div></div>
  
  
                            <div class="com3"><div class="upic3"><img src="images/u1.png"></img></div>
					        <div class="ucom3"><b>"</b>This was definitely one of the best trips we have been on and it was first class service from the planning phase through the actual trip!<b>"</b><br><center><b>- Alexander</b></center></div></div>

		                    
							<div class="com4"><div class="upic4"><img src="images/u1.png"></img></div>
                            <div class="ucom4"><b>"</b>This was definitely one of the best trips we have been on and it was first class service from the planning phase through the actual trip!<b>"</b><br><center><b>- Alexander</b></center></div></div>


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