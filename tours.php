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
	 <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
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
						
						 .active {
						         width: 160px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 150px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: 	black;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
						  .dropdown2{
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
						   
					.sp1t{
					       font-family: 'Yanone Kaffeesatz', sans-serif;
						   font-size: 38px;
					        margin-top: 40px;
							margin-left: 200px;
							
							
					
					     }
						 
				    .sp1p{
					        margin-top: 20px;
							margin-left: 200px;
							
							
					
					     }
						   
				    .sp1{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 20px;
					        padding-left : 3em;
							margin-top: -230px;
							margin-left: 450px;
							
						}
						
					.sp1d{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 24px;
					        padding-left : 3em;
							margin-top: 20px;
							margin-left: 270px;
							
						}
						
					.sp2t{
					       font-family: 'Yanone Kaffeesatz', sans-serif;
						   font-size: 38px;
					        margin-top: -360px;
							margin-left: 740px;
							
							
					
					     }
						 
				    .sp2p{
					        margin-top: 20px;
							margin-left: 740px;
							
							
					
					     }
						   
				    .sp2{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 20px;
					        padding-left : 3em;
							margin-top: -230px;
							margin-left: 1000px;
							
						}
						
					.sp2d{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 24px;
					        padding-left : 3em;
							margin-top: 20px;
							margin-left: 800px;
							
						}
					
					.sp3t{
					       font-family: 'Yanone Kaffeesatz', sans-serif;
						   font-size: 38px;
					        margin-top: 140px;
							margin-left: 200px;
							
							
					
					     }
						 
				    .sp3p{
					        margin-top: 20px;
							margin-left: 200px;
							
							
					
					     }
						   
				    .sp3{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 20px;
					        padding-left : 3em;
							margin-top: -230px;
							margin-left: 450px;
							
						}
						
					.sp3d{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 24px;
					        padding-left : 3em;
							margin-top: 20px;
							margin-left: 270px;
							
						}
						
					.sp4t{
					       font-family: 'Yanone Kaffeesatz', sans-serif;
						   font-size: 38px;
					        margin-top: -360px;
							margin-left: 740px;
							
							
					
					     }
						 
				    .sp4p{
					        margin-top: 20px;
							margin-left: 740px;
							
							
					
					     }
						   
				    .sp4{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 20px;
					        padding-left : 3em;
							margin-top: -230px;
							margin-left: 1000px;
							
						}
						
					.sp4d{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 24px;
					        padding-left : 3em;
							margin-top: 20px;
							margin-left: 800px;
							
						}
					
						
						.g1{
                            width: 180px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 340px;
								 margin-top: 15px;
								 border: 0px solid gray;
								 background-color: 	#404040;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
							
						}
						.g2{
                             width: 180px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 880px;
								 margin-top: 15px;
								 border: 0px solid gray;
								 background-color: 	#404040;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
							
						}
						
						.g3{
                            width: 180px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 340px;
								 margin-top: 15px;
								 border: 0px solid gray;
								 background-color: 	#404040;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
							
						}
						.g4{
                             width: 180px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 880px;
								 margin-top: 15px;
								 border: 0px solid gray;
								 background-color: 	#404040;
                                 position: absolute;
                                 text-align: center;
								 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
							
						}
						
						.note {
                         width: 1365px;
						 height: 40px;
						 margin-top: 150px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 0px;
						 background: none;
						 font-family: 'Philosopher', sans-serif;
						 font-size: 18px;
						 text-indent: 40px ;
						 font-family: 'Lobster Two', cursive;
						 
                        }		
                        
                        .last {
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
						   <a href="tours.php"> <div class="active"><font color="white">Tours</font></div></a>
						   <a href="destination.php"> <div class="dropdown2" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Destinations</font></div></a>
						   <a href="hotels.php"> <div class="dropdown3" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Hotels</font></div></a>
						   <a href="diaries.php"> <div class="dropdown4" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Reviews</font></div></a>
						   <a href="contact.php"> <div class="dropdown5" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Contact Us</font></div></a>
							 
						   <div class="distitle"><font color="#333333">Our Tours</font></div>
							<div class="dispic"><img src="images/line.png"></img></div>
							
						    
							
							<div class="sp1t">Manali Tour</div>
							<div class="sp1p"><img src="images/sp1.jpg" border="2"></img></div>
							<div class="sp1">-3 days/3 nights<br><BR>
							                  <b>Places to be visited:</b><br>
									         - Van Vihar<br>
											 - Mall road<br>
											 - Hadimba Temple<br>
										     - Solang Valley<br>
											 - Old Manali<br>
											 - Vasist Temple
											 
											 
							</div>
							<div class="sp1d">Price:&nbsp; &nbsp; &nbsp;<strike>  4999</strike> &nbsp; &nbsp; &nbsp; 2999</div>
							<a href="#"><div class="g1" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#333333';"><font color="white">Book Now</font></div></a>
							
							
							<div class="sp2t">Rishikesh Tour</div>
							<div class="sp2p"><img src="images/sp2.jpg" border="2"></img></div>
							<div class="sp2">-2 days/2 nights<br><BR>
							                  <b>Places to be visited:</b><br>
									         - Lakshman Jhula<br>
											 - Ram Jhula<br>
											 - Bharat Mandir<br>
										     - River rafting<br>
											 - Neelkanth Mahadev temple<br>
											 - Camping
											 
											 
							</div>
							<div class="sp2d">Price:&nbsp; &nbsp; &nbsp;<strike>  4599</strike> &nbsp; &nbsp; &nbsp; 2599</div>
						    <a href="#"><div class="g2" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#333333';"><font color="white">Book Now</font></div></a>
                            
							<div class="sp3t">Shimla Tour</div>
							<div class="sp3p"><img src="images/sp3.jpg" border="2"></img></div>
							<div class="sp3">-3 days/2 nights<br><BR>
							                  <b>Places to be visited:</b><br>
									         - Kufri<br>
											 - Mall road,Ridge<br>
											 - Jakhoo Temple<br>
										     - Christ Church<br>
											 - Lakkar Bazar<br>
											 - Himachal State Museum
											 
											 
							</div>
							<div class="sp3d">Price:&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 3799</div>
                            <a href="#"><div class="g3" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#333333';"><font color="white">Book Now</font></div></a>
                            
							<div class="sp4t">Mcleodganj Tour</div>
							<div class="sp4p"><img src="images/sp4.jpg" border="2"></img></div>
							<div class="sp4">-2 days/1 night<br><BR>
							                  <b>Places to be visited:</b><br>
									         - Bhagsunath Temple<br>
											 - Kangra Forst<br>
											 - Trekking<br>
										     - River rafting<br>
											 - Church of St. Johns<br>
											 - Camping
											 
											 
							</div>
							<div class="sp4d">Price:&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; 1999</div>
						    <a href="#"><div class="g4" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#333333';"><font color="white">Book Now</font></div></a>
                         
						    <div class="note"><b>Note:  </b> All the prices mentioned on this site are in Indian Rupees.Trip includes hotels,local sight seeings and breakfast & dinner.</div>
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