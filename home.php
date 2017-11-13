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
                            font-family: cursive;
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
						
						 .dropdown {
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
									   
							.dropdown-active {
						         width: 160px;
							     height: 40;
                                 display: inline-block;
								 margin-left: -7px;
								 margin-top: -40px;
								 border: 0px solid gray;
								 background-color: 	black;
                                 position: absolute;
                                 text-align: center;
                                 font-family: 'Lobster Two', cursive;
								 font-size: 24px;
                                       }
									  

                         .picborder{
						 width: 1365px;
						 height: 10px;
						 background-color: black;
						 margin-top: 0px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: -7px;
						 }
						 .picbottom{
						 width: 1365px;
						 height: 10px;
						 background-color: black;
						 margin-top: 0px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: -7px;
						 }
							
						   .pic1 {
                         width: 340px;
						 height: 300px;
						 margin-top: 0px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: -7px;
						 
						 
						 
                        }
						.pic2 {
                         width: 340px;
						 height: 300px;
						 margin-top: -300px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 333px;
						 
						 
						 
                        }
                       .pic3{
                         width: 340px;
						 height: 300px;
						 margin-top: -300px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 670px;
						 
						 
						 
                        }
						.pic4{
                         width: 340px;
						 height: 300px;
						 margin-top: -300px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: 1010px;
						 
						 
						 
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
							margin-left: -70px;
							
							
					
					     }
						   
				    .sp1{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 20px;
					        padding-left : 3em;
							margin-top: -230px;
							margin-left: 180px;
							
						}
						
					.sp1d{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 24px;
					        padding-left : 3em;
							margin-top: 20px;
							margin-left: -80px;
							
						}
						
					.sp2t{
					       font-family: 'Yanone Kaffeesatz', sans-serif;
						   font-size: 38px;
					        margin-top: -360px;
							margin-left: 700px;
							
							
					
					     }
						 
				    .sp2p{
					        margin-top: 20px;
							margin-left: -70px;
							
							
					
					     }
						   
				    .sp2{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 20px;
					        padding-left : 3em;
							margin-top: -230px;
							margin-left: 180px;
							
						}
						
					.sp2d{
                            font-family: 'Yanone Kaffeesatz', sans-serif;
							font-size: 24px;
					        padding-left : 3em;
							margin-top: 20px;
							margin-left: -80px;
							
						}
						
						.g1{
                            width: 180px;
							     height: 40px;
                                 display: inline-block;
								 margin-left: 120px;
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
								 margin-left: 120px;
								 margin-top: 15px;
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
							margin-top: 110px;
							margin-left: -410px;
						 
                           }
					   .hpic {
                            
							margin-top: 10px;
							margin-left: -440px;
						 
                           }

                        .com1 {
                            
							     width: 900px;
							     height: 120px;
                                 display: inline-block;
								 margin-left: -800px;
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
								 margin-left: -500px;
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
								 margin-left: -800px;
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
                    
                    .last {
                         width: 1365px;
						 height: 30px;
						 margin-top: 500px;
                         margin-bottom: 0px;
                         margin-right: 0px;
                         margin-left: -910px;
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
						   <a href="home.php"> <div class="dropdown-active"><font color="white">Home</font></div></a>
						   <a href="tours.php"><div class="dropdown" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Tours</font></div></a>
						   <a href="destination.php"><div class="dropdown2" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Destinations</font></div></a>
						   <a href="hotels.php"><div class="dropdown3" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Hotels</font></div></a>
						   <a href="diaries.php"><div class="dropdown4" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Reviews</font></div></a>
						   <a href="contact.php"><div class="dropdown5" onmouseover="this.style.background='#ff3333';"onmouseout="this.style.background='#404040';"><font color="white">Contact Us</font></div></a>
							
							<div class="picborder"></div>
							<div class="pic1"><img src="images/1.jpg"></img></div>
							<div class="pic2"><img src="images/2.jpg"></img></div>
							<div class="pic3"><img src="images/3.jpg"></img></div>
							<div class="pic4"><img src="images/4.jpg"></img></div>
							
							
							<div class="distitle"><font color="#333333">Special Offers</font></div>
							<div class="dispic"><img src="images/line.png"></img></div>
							
						    
							
							<div class="sp1t">Manali Tour</sp1>
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
							
							
							<div class="sp2t">Rishikesh Tour</sp1>
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

                            
							<div class="htitle"><font color="#333333">Happy Customers</font></div>
							<div class="hpic"><img src="images/line.png"></img></div>
							
							<div class="com1"><div class="upic2"><img src="images/u1.png"></img></div>
							<div class="ucom"><b>"</b>This was definitely one of the best trips we have been on and it was first class service from the planning phase through the actual trip!<b>"</b><br><center><b>- Alexander</b></center></div></div>
				   
				            <div class="com2"><div class="upic"><img src="images/u1.png"></img></div>
					        <div class="ucom2"><b>"</b>This was definitely one of the best trips we have been on and it was first class service from the planning phase through the actual trip!<b>"</b><br><center><b>- Alexander</b></center></div></div>
  
  
                            <div class="com3"><div class="upic3"><img src="images/u1.png"></img></div>
					        <div class="ucom3"><b>"</b>This was definitely one of the best trips we have been on and it was first class service from the planning phase through the actual trip!<b>"</b><br><center><b>- Alexander</b></center></div></div>

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