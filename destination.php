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
						  .active{
						         width: 160px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 300px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: black	;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
							.dropdown3{
						         width: 160px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 450px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: 	#404040;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
							.dropdown4{
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
							     height: 40px;
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
							.distitle {
                            font-family: 'Lobster Two', cursive;
							font-size: 58px;
					        text-indent: 50px ;
							margin-top: 30px;
							text-align: center;
						 
                           }
					     .dispic {
                            
							margin-top: 10px;
							margin-left: 463px;
						 
                           }
						  
						  .des1{
						    
							width: 1250px;
							height: 1800px;
						    font-family: 'Lobster Two', cursive;
							font-size: 58px;
					        text-indent: 50px ;
							margin-top: 30px;
							margin-left: 35px;
							border: 2px solid gray;
							
						 
						  
						  
						  }
						  
						 .des1t {
                         width: 300px;
						 height: 40px;
						 margin-top: 20px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 0px;
						 background: none;
						 font-family: 'Lobster Two', cursive;
						 font-size: 48px;
						 text-indent: 40px ;
						 
						 
                        }	
                      
                        .des1p {
                         width: 520px;
						 height: 360px;
						 margin-top: 60px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: -5px;
						 background: none;
						 
						 
                        }	
                        
                         .des1info {
                         width: 520px;
						 height: 360px;
						 margin-top: -250px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 400px;
						 padding-left : 6em;
						 background: none;
						 font-family: 'Lobster Two', cursive;
						 font-size: 24px;
						 
						 
                        }	

                         .des1i{
                         width: 1250px;
						 height: 360px;
						 margin-top: -120px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: -130px;
						 padding-left : 8em;
						 background: none;
						 font-family: 'Lobster Two', cursive;
						 font-size: 20px;
						 
						 
                        }		

                    .d1t {
                         width: 300px;
						 height: 40px;
						 margin-top: -240px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 30px;
						 background: none;
						 font-family: 'Lobster Two', cursive;
						 font-size: 28px;
						 text-indent: 40px ;
						 
						 
                        }
                    
                    .d1p {
                         width: 500px;
						 height: 300px;
						 margin-top: 20px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 30px;
						 background: none;
						 font-family: 'Lobster Two', cursive;
						 font-size: 22px;
						 text-indent: 40px ;
						 
						 
                        }			
                    
                     .d1t2 {
                         width: 500px;
						 height: 300px;
						 margin-top: -80px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 30px;
						 background: none;
						 font-family: 'Lobster Two', cursive;
						 font-size: 28px;
						 text-indent: 40px ;
						 
						 
                        }

                        .d1p1 {
                         width: 360px;
						 height: 360px;
						 margin-top: -220px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 110px;
						 background: none;
						 
						 
                        }	
 
                        .d1p2 {
                         width: 360px;
						 height: 360px;
						 margin-top: -360px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 680px;
						 background: none;
						 
						 
                        }

                        .d1p3 {
                         width: 360px;
						 height: 360px;
						 margin-top: 20px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 110px;
						 background: none;
						 
						 
                        }							
							
                        .d1p4 {
                         width: 360px;
						 height: 360px;
						 margin-top: -360px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 680px;
						 background: none;
						 
						 
                        }	

                        .last {
				            width: 160px;
							height: 37px;
							
						     margin-top: 20px;
                             margin-bottom: 0px;
                             margin-right: px;
                             margin-left:530px;
                             font-family: 'Lobster Two', cursive;
							font-size: 26px;
							background-color: 	#404040;
							border: 1px solid gray;
							position: absolute;
							text-indent: 20px ;
							
                           }		
						   
						 .end {
                         width: 1365px;
						 height: 20px;
						 margin-top: 20px;
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
						   <a href="destination.php"> <div class="active"><font color="white">Destinations</font></div></a>
						   <a href="hotels.php"> <div class="dropdown3" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Hotels</font></div></a>
						   <a href="diaries.php"> <div class="dropdown4" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Reviews</font></div></a>
						   <a href="contact.php"> <div class="dropdown5" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Contact Us</font></div></a>
							 
						    <div class="distitle"><font color="#333333">Famous Destinations</font></div>
							<div class="dispic"><img src="images/line.png"></img></div>  
							<div class="des1">
							
							<div class="des1t">Jaipur/Udaipur</div>
							<div class="des1p"><img src="images/ds1.jpg" border="1"/></div>
							<div class="des1info"> Total Area: 484.64 km<sup>2</sup><br>
							                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Languages:  Hindi,Rajasthani<br>
						    </div>
							<div class="des1i">Jaipur is also popularly known as the Pink City, is the capital of the Indian state of Rajasthan. Jaipur is a very famous tourist and education destination in India.
							<br>Lots of people flock to Jaipur to view the various forts and monuments in Jaipur which reflect its glorious past. Tourism is a significant part of Jaipur’s economy. Some of <br>the world’s best hotels are located here.</div>
						    
                            <div class="d1t">Places to be visited</div>
							<div class="d1p">-Hawa Mahal <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Amber Fort <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Jaigarh Fort<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-City Palace <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Jal Mahal <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Rambagh Palace <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Central Museum <br></div>
							<div class="d1t2">Image Gallery</div>
							<div class="d1p1"><img src="images/des1.jpg" border="1"></img></div>
							<div class="d1p2"><img src="images/des2.jpg" border="1"></img></div>
							<div class="d1p3"><img src="images/des3.jpg" border="1"></img></div>
							<div class="d1p4"><img src="images/des4.jpg" border="1"></img></div>
							<a href="http://www.jaipurtravel.com" target="_blank"><div class="last"onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Know More</font></div></a>
							</div>
							<div class="end"><center><font color="white">Copyright 2017-18</font></center></div>	
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