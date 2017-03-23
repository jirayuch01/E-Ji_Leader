<html>
 	<head></head>
 	<body background="http://www.goldenbeach-resort.com/images/slide-1.jpg" style="background-attachment:fixed;"> 
  		<link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/assets/layout-c0934f68b4.css" /> 
  		<link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/layout-3752f8b1d8.css" /> 
  		<link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/assets/home/index/entry-7bf6bee1cd.css" /> 

  		<?php
  			require("Header.php");
  		?>
  		<br><br><br>
		<div align="box-left"> 
	    	<div class="container"> 
	    		<div id="hero-banner-hosted">
					<ul id="hero-banner-tab-nav" class="ag-tab-nav clearfix"> 
	        			<li class="active"><a href="#tab-hotel" data-toggle="tab" data-tab="hotel">Booking</a></li> 
	       			</ul>
					<div class="tab-content"> 
		    			<div id="tab-hotel" class="tab-pane active">
							<div class="oneline-searchbox" style="width:100%px;height:280%;"> 
								<dl class="form-group"> 
						            <dt>
						            	Room Type
						            </dt> 
						            <dd> 
						            	<?php 
	                                        $connect = mysqli_connect("localhost","root","","projectwebpro");
	                                        $sql = 'select RoomsType from rooms  ';
	                                        $result = mysqli_query($connect,$sql);
	                                        echo '<select name="selectRoomType" class="form-control oneline-checkin checkin-input date-input hasDatepicker">';
	                                        echo '<option value="">Select Room Type</option>';
	                                        while($row = mysqli_fetch_assoc($result)){
	                                        	echo '<option value="'.$row['RoomsType'].'">'.$row['RoomsType'].'</option>';
	                                        }
	                                        echo '</select><br><br>';
	                                        mysqli_close($connect);
	                                    ?>
						              	<div id="recentSearchAndTopDestinationPanel" class="ctrl-topDestination" data-selenium="topDestinationPanel" style="display: none;"> 
						              	</div> 
						            </dd> 
						        </dl>

						        <dl class="form-group"> 
						            <dt>
						              Check-in:
						            </dt> 
						            <dd> 
						              	<input type="date" class="form-control" name="Check-in" /> 
						              	<i class="icon icon-calendar"></i> 
						            </dd> 
						        </dl>

						        <dl class="form-group"> 
						            <dt>
						              	Check-out:
						            </dt> 
						            <dd> 
						              	<input type="date" class="form-control" name="Check-out"/> 
						              	<i class="icon icon-calendar"></i> 
						            </dd> 
						        </dl> 

						        <dl class="form-group"> 
						            <dt>
						              	Room
						            </dt> 
						            <dd>
						             	<input type="number" name="Rooms" placeholder="Room" class="form-control oneline-checkin checkin-input date-input hasDatepicker" min="0">
						            </dd>
						        </dl>
						        
						    	<dl class="form-group"> 
						            <dt>
						            	Adult 
						            </dt> 
						            <dd>
						            	<input type="number" name="Adult" placeholder="Adult" class="form-control oneline-checkin checkin-input date-input hasDatepicker" min="0">
						            </dd>
						        </dl>
						            
						        <dl class="form-group"> 
						            <dt>
						                Children 
						            </dt> 
						            <dd>
						               	<input type="number" name="Children" placeholder="Children" class="form-control oneline-checkin checkin-input date-input hasDatepicker" min="0">
						    		 </dd>
						        </dl>

						        <!--<input type="number" class="form-control oneline-guests guest-search active" /> -->

						        <dl class="form-actions"> 
						            <dt>
						              
						            </dt> 
						            <dd>
						            	<form method="post" action="Search.php">
							            	<button type="submit" class="btn btn-primary" data-selenium="searchButton" onClick="Deluxe-room.php"> 
							            		<span class="js-search-button-unclicked-label"> 
							            			Search 
							            		</span>
							              	</button>
							            </form> 
						            </dd> 
						        </dl>

						        <h1></h1>

								<font size=5>
								&nbspEXECUTIVE PAVILION GARDEN VIEW 

								</font>

								<h1></h1>

								<font size=3>
									&nbsp&nbsp70 Guest-Rooms are comfortably furnished and located in either the hotel or in traditional style Bungalows scattered through the resort's garden.<br> 
									&nbsp&nbspEach room has individually controlled air-conditioning with a remote control, a bathtub shower, hot and cold water, toiletries, satellite television, IDD telephone, <br>
									&nbsp&nbspprivate balcony/terrace, coffee corner, mini bar and hair dryer.	
								</font>
								<h1></h1>
								
								<layout>
									<section align="center">
								            <img src="http://www.goldenbeach-resort.com/images/executive01.jpg" alt="EXECUTIVE PAVILION GARDEN VIEW" style="width:528px;height:328px;"> 
								            <img src="http://www.goldenbeach-resort.com/images/executive02.jpg" alt="EXECUTIVE PAVILION GARDEN VIEW" style="width:528px;height:328px;">
						      		</section>

						      		<section align="center" >
								            <img src="http://www.goldenbeach-resort.com/images/executive03.jpg" alt="EXECUTIVE PAVILION GARDEN VIEW" style="width:528px;height:328px;"> 
								            <img src="http://www.goldenbeach-resort.com/images/executive04.jpg" alt="EXECUTIVE PAVILION GARDEN VIEW" style="width:528px;height:328px;">
						      		</section>

						      		<section align="center" >
								            <img src="http://www.goldenbeach-resort.com/images/executive05.jpg" alt="EXECUTIVE PAVILION GARDEN VIEW" style="width:528px;height:328px;"> 
								            <img src="http://www.goldenbeach-resort.com/images/executive06.jpg" alt="EXECUTIVE PAVILION GARDEN VIEW" style="width:528px;height:328px;">
						      		</section>
					      		</layout>
					      		<h1></h1>
					      		<h1></h1>
						      	<center>
							      	<?php
							      	echo '<table border=0 cellpadding="10" cellspacing="5">';
							      	
							      	echo '<tr bgcolor="#FFFFFF" align="middle">';

							      	echo '<td>';
							      	echo "";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "1 May - 31 Oct. 2015";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "1 Nov. – 19 Dec. 2015".'<br>';
							      	echo '</td>';

							      	echo '<td>';
							      	echo "20 Dec. 2015- 20 Jan. 2016";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "";
							      	echo '</td>';

							      	echo '</tr>';

							      	echo '<tr bgcolor="#FFFFFF" align="middle">';

							      	echo '<td>';
							      	echo "";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "(Peak Season)";
							      	echo '</td>';

							      	echo '<td>';
							      	echo " ";
							      	echo '</td>';

							      	echo '</tr>';

							      	echo '<tr bgcolor="#FFFFFF" align="middle">';

							      	echo '<td>';
							      	echo '&nbsp';
							      	echo '</td>';

							      	echo '<td>';
							      	echo " ";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "";
							      	echo '</td>';

							      	echo '</tr>';

							      	echo '<tr bgcolor="#FFFFFF" align="middle">';

							      	echo '<td>';
							      	echo "";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "Single/Twin/Double";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "Single/Twin/Double";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "Single/Twin/Double";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "Extra Bed";
							      	echo '</td>';

							      	echo '</tr>';

							      	echo '<tr bgcolor="#FFFFFF" align="middle">';

							      	echo '<td>';
							      	echo "Room Type";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "Rates (THB)";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "Rates (THB)";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "Rates (THB)";
							      	echo '</td>';

							      	echo '<td>';
							      	echo "Rates (THB)";
							      	echo '</td>';

							      	echo '</tr>';  

							      	echo '<tr bgcolor="#FFFFFF" align="middle">';

							      	echo '<td>';
							      	echo '<font color="#FF0000">';
							      	echo "Executive Pavilion Garden View";
							      	echo '</font>';
							      	echo '</td>';

							      	echo '<td>';
							      	echo '<font color="#FF0000">';
							      	echo '<strike>10,000</strike> 5,000';
							      	echo '</font>';
							      	echo '</td>';

							      	echo '<td>';
							      	echo '<font color="#FF0000">';
							      	echo '<strike>10,000</strike> 7,000';
							      	echo '</font>';
							      	echo '</td>';

							      	echo '<td>';
							      	echo '<font color="#FF0000">';
							      	echo '<strike>10,000</strike> 8,000';
							      	echo '</font>';
							      	echo '</td>';

							      	echo '<td>';
							      	echo '<font color="#FF0000">';
							      	echo "1,200";
							      	echo '</font>';
							      	echo '</td>';

							      	echo '</tr>';
							      	echo '</table>';
							      	?>
						      	</center>


						      	<font size=3>
						      	<br>
						      	<br>
						      	&nbsp&nbsp- Above rates are nett inclusive of Service Charge, VAT and American Breakfast.<br>
								&nbsp&nbsp- Child age from 3-5 years old can sharing bed with parents without extra bed and additional charge for breakfast @150.-/ day.<br>
								&nbsp&nbsp- Child age from 5-11 years old we have an additional charge for extra bed including breakfast.<br>
								&nbsp&nbsp- Compulsory Gala Dinner on 24 Dec.2015 : THB 3,000/Adult , THB 1,500/Child.<br>
								&nbsp&nbsp- Compulsory Gala Dinner on 31 Dec.2015 : THB 3,500/Adult , THB 1,750/Child.<br>
								&nbsp&nbsp- Check in time ; 14.00 hrs.<br>
								&nbsp&nbsp- Check out time ; 12.00 hrs.<br>
								<br>
								&nbsp&nbspTransportation: <br>
								&nbsp&nbsp- From Krabi Airport to Hotel Baht 900-nett/van/way (max. 6 persons)<br> 
								&nbsp&nbsp- From Phuket Airport to Hotel Baht 3,000-nett/van/way (max. 6 persons)<br>
								&nbsp&nbsp- From Phuket Beaches to Hotel Baht 3,500-nett/van/way (max. 6 persons)<br>
								</font>
							</div>
							<div class="col-md-12 footer" style=" margin: 15px auto; padding: 0px;">
                                <div class="col-md-12" >
                                        <div class="col-md-6 footer-left"  style="background-color: white;">
                                            <b>EjiLeader Resort and Spa</b><br>
                                            PSU Phuket, Kathu, Kathu, Phuket 83120<br>
                                            Telephone : 076276012-(13)&nbsp;&nbsp;Fax : 076276002<br>
                                            GPS : N8.02999425344937 / E98.8238769795623 
                                        </div>
                                        <div class="col-md-6 footer-right" align="center"  style="background-color: white;">
                                            <a href="Index-cus.php"><img src="Images/u.png" height="80" width="500"></a>
                                        </div>
                                </div>
                            </div>  
						</div>
					</div>
				</div>
			</div>
		</div>
   </body>
</html>