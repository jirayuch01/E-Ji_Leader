<html>
 <head></head>
 <body background="http://www.goldenbeach-resort.com/images/slide-1.jpg" style="background-attachment:fixed;"> 
    <link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/assets/layout-c0934f68b4.css" /> 
    <link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/layout-3752f8b1d8.css" /> 
    <link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/assets/home/index/entry-7bf6bee1cd.css" />

    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/master.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/default.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/dynamic.aspx?hotelkey===QTUF1M">
    <link rel="stylesheet" type="text/css" media="screen" href="css/lightview/lightview.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/tipped/tipped.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/blueimp/css/blueimp-gallery.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/component.css">    
    <?php
  	  require("header.php");
    ?>
<br><br>
    <br />

    <form name="form2" method="post" action="Search.php">
    <div align="box-left"> 
     <div class="container"> 
      <div id="hero-banner-hosted"> 
       <ul id="hero-banner-tab-nav" class="ag-tab-nav clearfix"> 
        <li class="active"><a href="#tab-hotel" data-toggle="tab" data-tab="hotel">Booking</a></li> 
       </ul> 
       <div class="tab-content"> 
        <div id="tab-hotel" class="tab-pane active"> 
          <div id="oneline-searchbox" class="oneline-searchbox" style="width:50%px;height:165%;" aign="center"> 
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
              <input type="date" class="form-control" name="Check-in"/> 
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
             	<input type="number" name="Rooms"  placeholder="Room" class="form-control oneline-checkin checkin-input date-input hasDatepicker" min="0">
             </dd>
            </dl>
        
    		    <dl class="form-group"> 
              <dt>
                Adult 
              </dt> 
              <dd>
                <input type="number" name="Adult"  placeholder="Adult" class="form-control oneline-checkin checkin-input date-input hasDatepicker" min="0">
              </dd>
            </dl>

            <dl class="form-group"> 
              <dt>
                Children 
              </dt> 
              <dd>
               <input type="number" name="Children"  placeholder="Children" class="form-control oneline-checkin checkin-input date-input hasDatepicker" min="0">
    		      </dd>
            </dl>
              <!--<input type="number" class="form-control oneline-guests guest-search active" /> -->
            <dl class="form-actions"> 
              <dt>
              
              </dt> 
              <dd> 
                  <input type="submit" name="btnSubmit" value="Search"  class="btn btn-primary" data-selenium="searchButton"> 
                    <span class="js-search-button-unclicked-label"> 
                      Search 
                    </span>
                  </button>     
                </form>

             </dd> 
            </dl>

          </form>
            <h1></h1>
            
            <center>
              <ul>
              <li class="mosaic-row mosaic-row-one clearfix" data-selenium="top-destination-row">
                <section class="mosaic-cell">
                  <figure>
                    <div class="mosaic-cell-overlay"></div>
                    <img src="http://www.goldenbeach-resort.com/images/deluxe01.jpg" alt="DELUXE ROOM">
                    <a href="Deluxe room.php" class="mosaic-cell-caption" data-selenium="destination-url" data-order="0" data-id="9395">
                      <figcaption>
                          <h4 class="mosaic-cell-caption-city" data-selenium="destination-city">DELUXE ROOM</h4>
                          <span class="mosaic-cell-caption-country" data-selenium="destination-country">Krabi</span>
                      </figcaption>
                    </a>
                  </figure>
                </section>

                <section class="mosaic-cell">
                  <figure>
                      <div class="mosaic-cell-overlay"></div>
                      <img src="http://www.goldenbeach-resort.com/images/superio01.jpg" alt="SUPERIOR SUITE" style="width:528px;height:328px;">
                      <a href="Superior suite.php" class="mosaic-cell-caption" data-selenium="destination-url" data-order="1" data-id="7401">
                          <figcaption>
                              <h4 class="mosaic-cell-caption-city" data-selenium="destination-city">SUPERIOR SUITE</h4>
                              <span class="mosaic-cell-caption-country" data-selenium="destination-country">Krabi</span>
                          </figcaption>
                      </a>
                  </figure>
                </section>
              </li>
              
              <li class="mosaic-row mosaic-row-two clearfix" data-selenium="top-destination-row">
                <section class="mosaic-cell">
                  <figure>
                  <div class="mosaic-cell-overlay"></div>
                  <img src="http://www.goldenbeach-resort.com/images/deluxe02.jpg" alt="PAVILION SUITE" style="width:528px;height:345px;">
                  <a href="Pavilion suite.php" class="mosaic-cell-caption" data-selenium="destination-url" data-order="2" data-id="8584">
                      <figcaption>
                          <h4 class="mosaic-cell-caption-city" data-selenium="destination-city">PAVILION SUITE</h4>
                          <span class="mosaic-cell-caption-country" data-selenium="destination-country">Krabi</span>
                      </figcaption>
                  </a>
                  </figure>
                </section>

                <section class="mosaic-cell">
                    <figure>
                        <div class="mosaic-cell-overlay"></div>
                        <img src="http://www.goldenbeach-resort.com/images/pavilion_seaview01.jpg" alt="PAVILION SEA VIEW" style="width:528px;height:328px;">
                        <a href="Pavilion sea view.php" class="mosaic-cell-caption" data-selenium="destination-url" data-order="3" data-id="16056">
                            <figcaption>
                                <h4 class="mosaic-cell-caption-city" data-selenium="destination-city">PAVILION SEA VIEW</h4>
                                <span class="mosaic-cell-caption-country" data-selenium="destination-country">Krabi</span>
                            </figcaption>
                        </a>
                    </figure>
                </section>

                <div class="mosaic-cell">
                  <!-- nest these two mosaic-cells below because they need to sit right in the layout -->
                  <section class="mosaic-cell">
                      <figure>
                          <div class="mosaic-cell-overlay"></div>
                          <img src="http://www.goldenbeach-resort.com/images/executive02.jpg" alt="EXECUTIVE PAVILION GARDEN" style="width:400px;height:200px;">
                          <a href="Executive pavilion garden.php" class="mosaic-cell-caption" data-selenium="destination-url" data-order="4" data-id="5085">
                              <figcaption>
                                  <h4 class="mosaic-cell-caption-city" data-selenium="destination-city">EXECUTIVE PAVILION GARDEN</h4>
                                  <span class="mosaic-cell-caption-country" data-selenium="destination-country">Krabi</span>
                              </figcaption>
                          </a>
                      </figure>
                  </section>

                  <section class="mosaic-cell">
                      <figure>
                          <div class="mosaic-cell-overlay"></div>
                          <img src="http://www.goldenbeach-resort.com/images/executive_seaview01.jpg" alt="EXECUTIVE PAVILION SEA" style="width:400px;height:200px;">
                          <a href="Executive pavilion sea view.php" class="mosaic-cell-caption" data-selenium="destination-url" data-order="5" data-id="17019">
                              <figcaption>
                                  <h4 class="mosaic-cell-caption-city" data-selenium="destination-city">EXECUTIVE PAVILION SEA</h4>
                                  <span class="mosaic-cell-caption-country" data-selenium="destination-country">Krabi</span>
                              </figcaption>
                          </a>
                      </figure>
                  </section>
                </div>

                <section class="mosaic-cell" style="width:1100px;height:200px;">
                      <figure>
                          <div class="mosaic-cell-overlay"></div>
                          <img src="http://shriramdentalcare.com/images/banner_dental-tourism.jpg" style="width:1100px;height:200px;">
                          <a href="/project_webpro/Tours/Insert_printDes.php" class="mosaic-cell-caption" data-selenium="destination-url" data-order="5" data-id="17019">
                              <figcaption>
                                  <h4 class="mosaic-cell-caption-city" data-selenium="destination-city">Program Tour</h4>
                                  <span class="mosaic-cell-caption-country" data-selenium="destination-country">Krabi</span>
                              </figcaption>
                          </a>
                      </figure>
                  </section>

              </li>
              </ul>
            </center>
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