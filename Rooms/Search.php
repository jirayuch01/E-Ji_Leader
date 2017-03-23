<head>
</head>
<body background="http://www.goldenbeach-resort.com/images/slide-1.jpg" style="background-attachment:fixed;">
    <link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/assets/layout-c0934f68b4.css" /> 
    <link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/layout-3752f8b1d8.css" /> 
    <link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/assets/home/index/entry-7bf6bee1cd.css" /> 

    <?php
        require("header.php");
        
        $roomtype=$_POST['selectRoomType'];
        $checkin=$_POST['Check-in'];
        $checkout=$_POST['Check-out'];
        $rooms=$_POST['Rooms'];
        $adult=$_POST['Adult'];
        $children=$_POST['Children'];

        //collect room id
        $connect = mysqli_connect("localhost","root","","projectwebpro");
         $sql = 'select idRooms from rooms where RoomsType="'.$roomtype.'"  ';
        $result = mysqli_query($connect,$sql);
            while($row = mysqli_fetch_assoc($result)){
                $roomid=$row['idRooms'];

            }

        mysqli_close($connect);

        function CheckvalueSearch(){
            if($roomtype == ""){
                echo '  <script language="javascript">
                        alert("Please Select RoomType");
                        </script>
                    ';
            }
            if($checkin==Null){
                echo '  <script language="javascript">
                        alert("Please Select Date To Check in");
                        </script>
                    ';
            }
            if($checkout==Null){
                echo '  <script language="javascript">
                        alert("Please Select Date to Check Out");
                        </script>
                    ';
            }
            if($rooms==0){
                echo '  <script language="javascript">
                        alert("Please Select Number of Room");
                        </script>
                    ';
            }
            if($adult==0){
                echo '  <script language="javascript">
                        alert("Please Select Number of Adult");
                        </script>
                    ';
            }
            if($children==0){
                echo '  <script language="javascript">
                        alert("Please Select Number of Children");
                        </script>
                    ';
            }

            echo'   <sctipt language="javascript">
                    window.location="Search.php"
                    </script>
                ';
        }

        function CheckvalueRoom(){
            $room =$_POST['NumberRoom'];

            if($room==0){
                echo '  <script language="javascript">
                        alert("Please Select Number of Children");
                        </script>
                     ';
            }

            echo'   <sctipt language="javascript">
                    window.location="Search.php"
                    </script>
                ';
        }


    ?>
    
    <div class="container">
        <div class="row header" >
            <div class="row" style="background-color: #f7f5f6; border-top: 1px solid #dadada; overflow: hidden;" >
                <div class="col-md-12 page" >
                    <div class="col-md-12" style="background-color: #FFF; margin: 15px 0px auto; padding: 0px;">
                        <div class="col-md-12">
                            <form method="post" action="Search.php">
                            <div class="row panel-search-box" >
                                <div class="col-md-12">
                                    <div class="panel-form">
                                        <h2 class="fontthemecolor">
                                            <b class="title-pointer">
                                                &nbsp;
                                            </b>
                                                Availability Plan for EjiLeader Resort and Spa
                                        </h2>
                                        
                                        <div class="col-md-2">
                                                <dl class="form-group"> 
                                                    <dt>
                                                        Check-in:
                                                    </dt> 
                                                    <dd> 
                                                        <input type="date" class="form-control" name="Check-in"/>  
                                                    </dd> 
                                                </dl>    
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <dl class="form-group"> 
                                                <dt>
                                                    Check-out:
                                                </dt> 
                                                <dd> 
                                                    <input type="date" class="form-control" name="Check-out"/>  
                                                </dd> 
                                            </dl> 
                                        </div>

                                        <div id="panel_Room" class="col-md-1">
                                            <div class="form-group">
                                                <dt>
                                                    Rooms
                                                </dt>
                                                <select name="Rooms" id="dropdownlist_NumberOfRoom" class="form-control" style="width:100%;">
                                                    <option selected="selected" value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div id="panel_RoomType" class="col-md-3">
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
                                        </div>

                                        <div id="panel_Adult" class="col-md-2">
                                            <dl class="form-group"> 
                                                <dt>
                                                    Adult per Room
                                                </dt> 
                                                <dd>
                                                    <input type="number" name="Adult" placeholder="Adult" class="form-control oneline-checkin checkin-input date-input hasDatepicker" min="0">
                                                </dd>
                                            </dl>
                                        </div>

                                        <div id="panel_Children" class="col-md-2">
                                            <dl class="form-group"> 
                                                <dt>
                                                    Children 
                                                </dt> 
                                                <dd>
                                                    <input type="number" name="Children" placeholder="Children" class="form-control oneline-checkin checkin-input date-input hasDatepicker" min="0">
                                                </dd>
                                            </dl>
                                        </div>
                                        
                                        <div class="col-md-12 center">
                                            <dl class="form-actions"> 
                                                <dt>
                                      
                                                </dt> 
                                                <dd>  
                                                    <button type="submit" class="btn btn-primary" data-selenium="searchButton" onClick="CheckvalueSearch();"> 
                                                        <span class="js-search-button-unclicked-label"> 
                                                            Search 
                                                        </span>
                                                    </button>
                                                </dd> 
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>

                            <form method="post" action="Booking.php">
                                
                            <div class="row panel-search-results">
                                <div class="col-md-8 title">
                                    <b><fontthemecolor>Search Results : </fontthemecolor>
                                        <?php 
                                            echo "$rooms Room, $adult Adult, $children Children, Check-in : $checkin, Check-out : $checkout ";
                                        ?>
                                    </b>
                                </div>
                            </div>
                            
                            <div class="row" style="padding-bottom:15px;">

                                <input type="hidden" name="selectRoomType" value="<?php echo $roomtype; ?>">
                                <input type="hidden" name="Check-in" value="<?php echo $checkin; ?>">
                                <input type="hidden" name="Check-out" value="<?php echo $checkout; ?>">
                                <input type="hidden" name="Adult" value="<?php echo $adult; ?>">
                                <input type="hidden" name="Children" value="<?php echo $children; ?>">
                               <?php 
                                    $connect = mysqli_connect("localhost","root","","projectwebpro");
                                    $sql = 'select RoomsPrice from rooms where RoomsType="'.$roomtype.'"  ';
                                    $result = mysqli_query($connect,$sql);
                                    while($row = mysqli_fetch_assoc($result)){
                                        $standard=$row['RoomsPrice'];
                                        $standard1=$row['RoomsPrice'];
                                    }

                                    mysqli_close($connect);

                                    if($roomtype==""){
                                        echo ' 
                                                <div class="col-md-12">
                                                <table id="table_RateRoomType" class="rate table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <td class="description roomtype" align="center"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount" align="center">Stay Total <em>in THB</em></td><td class="no-of-room" align="center">No. of Room</td>
                                                        </tr>
                                                    </thead>

                                                     <tbody>
                                                        <tr id="PresentationMessageRateRoomType" class="message" style="height:75px;">
                                                            <td colspan="6" align="center">';    
                                                            echo '</b><br><div style="padding-top:10px; color:#f00;">No rooms available in your selected period. Please make sure you select room type </div>
                                                            </td>
                                                        </tr>
                                                     </tbody>
                                                </table>
                                        ';
                                    }else{


                                        if($roomtype=="DELUXE ROOM"){

                                            $datelow1=date("2016-05-02");
                                            $datelow2=date("2016-10-31");

                                            $datenormal1=date("2016-11-01");
                                            $datenormal2=date("2016-12-19");

                                            $datepeak1=date("2016-12-20");
                                            $datepeak2=date("2017-01-20");

                                            if($checkin>=$datelow1 && $checkin<=$datelow2){
                                                $standard1="2000";
                                            }elseif($checkin>=$datenormal1 && $checkin<=$datenormal2){
                                                $standard1="3500";
                                            }elseif($checkin>=$datepeak1 && $checkin<=$datepeak2){
                                                $standard1="4500";
                                            }

                                            // check empty room
                                            $connect = mysqli_connect("localhost","root","","projectwebpro");
                                            $sql = 'select CheckInDate,CheckOutDate from customers_booking_rooms where RoomsID="'.$roomid.'" ';
                                            $result = mysqli_query($connect,$sql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                if(($checkin >= $row['CheckInDate'] && $checkin <= $row['CheckOutDate']) || ($checkout >= $row['CheckInDate'] && $checkout <= $row['CheckOutDate'])){
                                                    
                                                    echo ' 
                                                            <div class="col-md-12">
                                                            <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype" align="center"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount" align="center">Stay Total <em>in THB</em></td><td class="no-of-room" align="center">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                 <tbody>
                                                                    <tr id="PresentationMessageRateRoomType" class="message" style="height:75px;">
                                                                        <td colspan="6" align="center">';    
                                                                        echo '</b><br><div style="padding-top:10px; color:#f00;">No rooms available in your selected period.';echo "   $checkin => $checkout"; echo' </div>
                                                                        </td>
                                                                    </tr>
                                                                 </tbody>
                                                            </table>
                                                    ';
                                                    break;
                                                }else{
                                                    
                                                    echo '<input type="hidden" name="Money" value="'; echo $standard1; echo '">';
                                                    echo '  
                                                            <div class="col-md-12">
                                                                <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount">Stay Total <em>in THB</em></td><td class="no-of-room">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="separator">
                                                                        <td class="description fill top" id="top-roomrate0" rowspan="2">
                                                                            <div class="row" align="center">
                                                                                <div class="col-md-12"><u><a href="'; echo "$roomtype.php"; echo '" class="ajax-modal">'; echo "$roomtype"; echo '</a></u>
                                                                                </div>
                                                                                <img alt="image" class="img-responsive" src="http://www.goldenbeach-resort.com/images/deluxe03.jpg" style="width:300px;height:200px;">    
                                                                            </div>
                                                                        </td>

                                                                        <td class="description rate-option top">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div style="padding-bottom:7px;"><a data-url="room-information.aspx?hotelkey===QTUF1M&amp;key==0EVBBTTB1TP&amp;type=roomtype" class="ajax-modal">'; echo "$roomtype"; echo '</a>
                                                                                        <div style="padding-bottom:7px;">
                                                                                            <b>
                                                                                            </b>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="icon-highlighted">
                                                                                        
                                                                                        <img src="Images/icons2.jpg">
                                                                                        <span>
                                                                                            <i class="full-payment">
                                                                                            </i>
                                                                                            Full payment
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons4.jpg">
                                                                                        <span>
                                                                                            <i class="bathtub">
                                                                                            </i>
                                                                                            Bathtub
                                                                                        </span>

                                                                                        <img src="Images/icons3.jpg">
                                                                                        <span>
                                                                                            <i class="air-conditioning">
                                                                                            </i>
                                                                                            Air-Con
                                                                                        </span>

                                                                                        <img src="Images/icons7.jpg">
                                                                                        <span>
                                                                                            <i class="balcony">
                                                                                            </i>
                                                                                            Swimming Pool
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons1.jpg">
                                                                                        <span>
                                                                                            <i class="view">
                                                                                            </i>
                                                                                            Internet
                                                                                        </span>

                                                                                        <img src="Images/icons5.jpg">
                                                                                        <span>
                                                                                            <i class="mini-bar">
                                                                                            </i
                                                                                            >Mini Bar
                                                                                        </span>

                                                                                        <img src="Images/icons6.jpg">
                                                                                        <span>
                                                                                            <i class="private-bathroom">
                                                                                            </i>
                                                                                            Private bathroom
                                                                                            <font size="3">
                                                                                                <br><br>Cancellation Policy :<br>
                                                                                                - Cancellation : Cancel 7 days prior to arrival 1 night charge.<br>
                                                                                                - No Show will be charge the full amount.<br>

                                                                                                Refund Policy :<br>
                                                                                                - Any refund will be deducted 5% of total booking amount as administrations bank fee<br>
                                                                                            </font>
                                                                                        </span>
                                                                                    </div>

                                                                                    <ul>
                                                                                        <strong>
                                                                                                <span style="color: #ff6600;">
                                                                                                        Free WiFi Internet at Lobby.<br>
                                                                                                </span>
                                                                                            </strong>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="price" aling="center">
                                                                            <div>
                                                                                <div align="center">
                                                                                    <tooltip class="tooltip-occupancy" title="" >
                                                                                        <strike><font size="3">'; echo "$standard"; echo '</strike>
                                                                                            <br>'; echo "$standard1"; echo '</font>
                                                                                        
                                                                                    </tooltip>
                                                                                </div>
                                                                                <br>
                                                                                <div  aling="center"><font size="1" color="red">Incl. Service Charge &amp; 7% VAT
                                                                                </font>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="no-of-room">
                                                                            <div>
                                                                                <select name="NumberRoom" class="form-control dropdown-list-no-of-room">
                                                                                    <option value="0" class="zero">0</option>
                                                                                    <option value="1" class="ic">1</option>
                                                                                    <option value="2" class="ic">2</option>
                                                                                    <option value="3" class="ic">3</option>
                                                                                    <option value="4" class="ic">4</option>
                                                                                    <option value="5" class="ic">5</option>
                                                                                    <option value="6" class="ic">6</option>
                                                                                    <option value="7" class="ic">7</option>
                                                                                    <option value="8" class="ic">8</option>
                                                                                    <option value="9" class="ic">9</option>
                                                                                    <option value="10" class="ic">10</option>

                                                                                </select>

                                                                                <input type="submit" value="BOOK NOW"  class="form-control button-book-now">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        ';
                                                        break;
                                                }

                                            }

                                            mysqli_close($connect);
                                        }elseif($roomtype=="SUPERIOR SUITE"){

                                            $datelow1=date("2016-05-02");
                                            $datelow2=date("2016-10-31");

                                            $datenormal1=date("2016-11-01");
                                            $datenormal2=date("2016-12-19");

                                            $datepeak1=date("2016-12-20");
                                            $datepeak2=date("2017-01-20");

                                            if($checkin>=$datelow1 && $checkin<=$datelow2){
                                                $standard1="3000";
                                            }elseif($checkin>=$datenormal1 && $checkin<=$datenormal2){
                                                $standard1="4200";
                                            }elseif($checkin>=$datepeak1 && $checkin<=$datepeak2){
                                                $standard1="5100";
                                            }
                                            // check empty room
                                            $connect = mysqli_connect("localhost","root","","projectwebpro");
                                            $sql = 'select CheckInDate,CheckOutDate from customers_booking_rooms where RoomsID="'.$roomid.'" ';
                                            $result = mysqli_query($connect,$sql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                if(($checkin >= $row['CheckInDate'] && $checkin <= $row['CheckOutDate']) || ($checkout >= $row['CheckInDate'] && $checkout <= $row['CheckOutDate'])){
                                                    
                                                    echo ' 
                                                            <div class="col-md-12">
                                                            <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype" align="center"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount" align="center">Stay Total <em>in THB</em></td><td class="no-of-room" align="center">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                 <tbody>
                                                                    <tr id="PresentationMessageRateRoomType" class="message" style="height:75px;">
                                                                        <td colspan="6" align="center">';    
                                                                        echo '</b><br><div style="padding-top:10px; color:#f00;">No rooms available in your selected period.';echo "   $checkin => $checkout"; echo' </div>
                                                                        </td>
                                                                    </tr>
                                                                 </tbody>
                                                            </table>
                                                    ';
                                                        break;
                                                }else{
                                                    
                                                    echo '<input type="hidden" name="Money" value="'; echo $standard1; echo '">';
                                                    echo '  
                                                            <div class="col-md-12">
                                                                <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount">Stay Total <em>in THB</em></td><td class="no-of-room">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="separator">
                                                                        <td class="description fill top" id="top-roomrate0" rowspan="2">
                                                                            <div class="row" align="center">
                                                                                <div class="col-md-12"><u><a href="'; echo "$roomtype.php"; echo '" class="ajax-modal">'; echo "$roomtype"; echo '</a></u>
                                                                                </div>
                                                                                <img alt="image" class="img-responsive" src="http://www.goldenbeach-resort.com/images/deluxe03.jpg" style="width:300px;height:200px;">    
                                                                            </div>
                                                                        </td>

                                                                        <td class="description rate-option top">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div style="padding-bottom:7px;"><a data-url="room-information.aspx?hotelkey===QTUF1M&amp;key==0EVBBTTB1TP&amp;type=roomtype" class="ajax-modal">'; echo "$roomtype"; echo '</a>
                                                                                        <div style="padding-bottom:7px;">
                                                                                            <b>
                                                                                            </b>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="icon-highlighted">
                                                                                        
                                                                                        <img src="Images/icons2.jpg">
                                                                                        <span>
                                                                                            <i class="full-payment">
                                                                                            </i>
                                                                                            Full payment
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons4.jpg">
                                                                                        <span>
                                                                                            <i class="bathtub">
                                                                                            </i>
                                                                                            Bathtub
                                                                                        </span>

                                                                                        <img src="Images/icons3.jpg">
                                                                                        <span>
                                                                                            <i class="air-conditioning">
                                                                                            </i>
                                                                                            Air-Con
                                                                                        </span>

                                                                                        <img src="Images/icons7.jpg">
                                                                                        <span>
                                                                                            <i class="balcony">
                                                                                            </i>
                                                                                            Swimming Pool
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons1.jpg">
                                                                                        <span>
                                                                                            <i class="view">
                                                                                            </i>
                                                                                            Internet
                                                                                        </span>

                                                                                        <img src="Images/icons5.jpg">
                                                                                        <span>
                                                                                            <i class="mini-bar">
                                                                                            </i
                                                                                            >Mini Bar
                                                                                        </span>

                                                                                        <img src="Images/icons6.jpg">
                                                                                        <span>
                                                                                            <i class="private-bathroom">
                                                                                            </i>
                                                                                            Private bathroom
                                                                                            <font size="3">
                                                                                                <br><br>Cancellation Policy :<br>
                                                                                                - Cancellation : Cancel 7 days prior to arrival 1 night charge.<br>
                                                                                                - No Show will be charge the full amount.<br>

                                                                                                Refund Policy :<br>
                                                                                                - Any refund will be deducted 5% of total booking amount as administrations bank fee<br>
                                                                                            </font>
                                                                                        </span>
                                                                                    </div>

                                                                                    <ul>
                                                                                        <strong>
                                                                                                <span style="color: #ff6600;">
                                                                                                        Free WiFi Internet at Lobby.<br>
                                                                                                </span>
                                                                                            </strong>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="price" aling="center">
                                                                            <div>
                                                                                <div align="center">
                                                                                    <tooltip class="tooltip-occupancy" title="" >
                                                                                        <strike><font size="3">'; echo "$standard"; echo '</strike>
                                                                                            <br>'; echo "$standard1"; echo '</font>
                                                                                        
                                                                                    </tooltip>
                                                                                </div>
                                                                                <br>
                                                                                <div  aling="center"><font size="1" color="red">Incl. Service Charge &amp; 7% VAT
                                                                                </font>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="no-of-room">
                                                                            <div>
                                                                                <select name="NumberRoom" class="form-control dropdown-list-no-of-room">
                                                                                    <option value="0" class="zero">0</option>
                                                                                    <option value="1" class="ic">1</option>
                                                                                    <option value="2" class="ic">2</option>
                                                                                    <option value="3" class="ic">3</option>
                                                                                    <option value="4" class="ic">4</option>
                                                                                    <option value="5" class="ic">5</option>
                                                                                    <option value="6" class="ic">6</option>
                                                                                    <option value="7" class="ic">7</option>
                                                                                    <option value="8" class="ic">8</option>
                                                                                    <option value="9" class="ic">9</option>
                                                                                    <option value="10" class="ic">10</option>

                                                                                </select>

                                                                                <input type="submit" value="BOOK NOW"  class="form-control button-book-now">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        ';
                                                        break;
                                                }

                                            }

                                            mysqli_close($connect);
                                        }elseif($roomtype=="PAVILION SUITE"){

                                            $datelow1=date("2016-05-02");
                                            $datelow2=date("2016-10-31");

                                            $datenormal1=date("2016-11-01");
                                            $datenormal2=date("2016-12-19");

                                            $datepeak1=date("2016-12-20");
                                            $datepeak2=date("2017-01-20");

                                            if($checkin>=$datelow1 && $checkin<=$datelow2){
                                                $standard1="3750";
                                            }elseif($checkin>=$datenormal1 && $checkin<=$datenormal2){
                                                $standard1="5250";
                                            }elseif($checkin>=$datepeak1 && $checkin<=$datepeak2){
                                                $standard1="6750";
                                            }
                                            // check empty room
                                            $connect = mysqli_connect("localhost","root","","projectwebpro");
                                            $sql = 'select CheckInDate,CheckOutDate from customers_booking_rooms where RoomsID="'.$roomid.'" ';
                                            $result = mysqli_query($connect,$sql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                if(($checkin >= $row['CheckInDate'] && $checkin <= $row['CheckOutDate']) || ($checkout >= $row['CheckInDate'] && $checkout <= $row['CheckOutDate'])){
                                                    
                                                    echo ' 
                                                            <div class="col-md-12">
                                                            <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype" align="center"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount" align="center">Stay Total <em>in THB</em></td><td class="no-of-room" align="center">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                 <tbody>
                                                                    <tr id="PresentationMessageRateRoomType" class="message" style="height:75px;">
                                                                        <td colspan="6" align="center">';    
                                                                        echo '</b><br><div style="padding-top:10px; color:#f00;">No rooms available in your selected period.';echo "   $checkin => $checkout"; echo' </div>
                                                                        </td>
                                                                    </tr>
                                                                 </tbody>
                                                            </table>
                                                    ';
                                                    break;
                                                }else{
                                                    
                                                    echo '<input type="hidden" name="Money" value="'; echo $standard1; echo '">';
                                                    echo '  
                                                            <div class="col-md-12">
                                                                <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount">Stay Total <em>in THB</em></td><td class="no-of-room">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="separator">
                                                                        <td class="description fill top" id="top-roomrate0" rowspan="2">
                                                                            <div class="row" align="center">
                                                                                <div class="col-md-12"><u><a href="'; echo "$roomtype.php"; echo '" class="ajax-modal">'; echo "$roomtype"; echo '</a></u>
                                                                                </div>
                                                                                <img alt="image" class="img-responsive" src="http://www.goldenbeach-resort.com/images/deluxe03.jpg" style="width:300px;height:200px;">    
                                                                            </div>
                                                                        </td>

                                                                        <td class="description rate-option top">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div style="padding-bottom:7px;"><a data-url="room-information.aspx?hotelkey===QTUF1M&amp;key==0EVBBTTB1TP&amp;type=roomtype" class="ajax-modal">'; echo "$roomtype"; echo '</a>
                                                                                        <div style="padding-bottom:7px;">
                                                                                            <b>
                                                                                            </b>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="icon-highlighted">
                                                                                        
                                                                                        <img src="Images/icons2.jpg">
                                                                                        <span>
                                                                                            <i class="full-payment">
                                                                                            </i>
                                                                                            Full payment
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons4.jpg">
                                                                                        <span>
                                                                                            <i class="bathtub">
                                                                                            </i>
                                                                                            Bathtub
                                                                                        </span>

                                                                                        <img src="Images/icons3.jpg">
                                                                                        <span>
                                                                                            <i class="air-conditioning">
                                                                                            </i>
                                                                                            Air-Con
                                                                                        </span>

                                                                                        <img src="Images/icons7.jpg">
                                                                                        <span>
                                                                                            <i class="balcony">
                                                                                            </i>
                                                                                            Swimming Pool
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons1.jpg">
                                                                                        <span>
                                                                                            <i class="view">
                                                                                            </i>
                                                                                            Internet
                                                                                        </span>

                                                                                        <img src="Images/icons5.jpg">
                                                                                        <span>
                                                                                            <i class="mini-bar">
                                                                                            </i
                                                                                            >Mini Bar
                                                                                        </span>

                                                                                        <img src="Images/icons6.jpg">
                                                                                        <span>
                                                                                            <i class="private-bathroom">
                                                                                            </i>
                                                                                            Private bathroom
                                                                                            <font size="3">
                                                                                                <br><br>Cancellation Policy :<br>
                                                                                                - Cancellation : Cancel 7 days prior to arrival 1 night charge.<br>
                                                                                                - No Show will be charge the full amount.<br>

                                                                                                Refund Policy :<br>
                                                                                                - Any refund will be deducted 5% of total booking amount as administrations bank fee<br>
                                                                                            </font>
                                                                                        </span>
                                                                                    </div>

                                                                                    <ul>
                                                                                        <strong>
                                                                                                <span style="color: #ff6600;">
                                                                                                        Free WiFi Internet at Lobby.<br>
                                                                                                </span>
                                                                                            </strong>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="price" aling="center">
                                                                            <div>
                                                                                <div align="center">
                                                                                    <tooltip class="tooltip-occupancy" title="" >
                                                                                        <strike><font size="3">'; echo "$standard"; echo '</strike>
                                                                                            <br>'; echo "$standard1"; echo '</font>
                                                                                        
                                                                                    </tooltip>
                                                                                </div>
                                                                                <br>
                                                                                <div  aling="center"><font size="1" color="red">Incl. Service Charge &amp; 7% VAT
                                                                                </font>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="no-of-room">
                                                                            <div>
                                                                                <select name="NumberRoom" class="form-control dropdown-list-no-of-room">
                                                                                    <option value="0" class="zero">0</option>
                                                                                    <option value="1" class="ic">1</option>
                                                                                    <option value="2" class="ic">2</option>
                                                                                    <option value="3" class="ic">3</option>
                                                                                    <option value="4" class="ic">4</option>
                                                                                    <option value="5" class="ic">5</option>
                                                                                    <option value="6" class="ic">6</option>
                                                                                    <option value="7" class="ic">7</option>
                                                                                    <option value="8" class="ic">8</option>
                                                                                    <option value="9" class="ic">9</option>
                                                                                    <option value="10" class="ic">10</option>

                                                                                </select>

                                                                                <input type="submit" value="BOOK NOW"  class="form-control button-book-now">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        ';
                                                        break;
                                                }

                                            }

                                            mysqli_close($connect);
                                        }elseif($roomtype=="PAVILION SEA VIEW"){

                                            $datelow1=date("2016-05-02");
                                            $datelow2=date("2016-10-31");

                                            $datenormal1=date("2016-11-01");
                                            $datenormal2=date("2016-12-19");

                                            $datepeak1=date("2016-12-20");
                                            $datepeak2=date("2017-01-20");

                                            if($checkin>=$datelow1 && $checkin<=$datelow2){
                                                $standard1="4250";
                                            }elseif($checkin>=$datenormal1 && $checkin<=$datenormal2){
                                                $standard1="5950";
                                            }elseif($checkin>=$datepeak1 && $checkin<=$datepeak2){
                                                $standard1="7650";
                                            }
                                            // check empty room
                                            $connect = mysqli_connect("localhost","root","","projectwebpro");
                                            $sql = 'select CheckInDate,CheckOutDate from customers_booking_rooms where RoomsID="'.$roomid.'" ';
                                            $result = mysqli_query($connect,$sql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                if(($checkin >= $row['CheckInDate'] && $checkin <= $row['CheckOutDate']) || ($checkout >= $row['CheckInDate'] && $checkout <= $row['CheckOutDate'])){
                                                    
                                                    echo ' 
                                                            <div class="col-md-12">
                                                            <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype" align="center"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount" align="center">Stay Total <em>in THB</em></td><td class="no-of-room" align="center">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                 <tbody>
                                                                    <tr id="PresentationMessageRateRoomType" class="message" style="height:75px;">
                                                                        <td colspan="6" align="center">';    
                                                                        echo '</b><br><div style="padding-top:10px; color:#f00;">No rooms available in your selected period.';echo "   $checkin => $checkout"; echo' </div>
                                                                        </td>
                                                                    </tr>
                                                                 </tbody>
                                                            </table>
                                                    ';
                                                    break;
                                                }else{
                                                    
                                                    echo '<input type="hidden" name="Money" value="'; echo $standard1; echo '">';
                                                    echo '  
                                                            <div class="col-md-12">
                                                                <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount">Stay Total <em>in THB</em></td><td class="no-of-room">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="separator">
                                                                        <td class="description fill top" id="top-roomrate0" rowspan="2">
                                                                            <div class="row" align="center">
                                                                                <div class="col-md-12"><u><a href="'; echo "$roomtype.php"; echo '" class="ajax-modal">'; echo "$roomtype"; echo '</a></u>
                                                                                </div>
                                                                                <img alt="image" class="img-responsive" src="http://www.goldenbeach-resort.com/images/deluxe03.jpg" style="width:300px;height:200px;">    
                                                                            </div>
                                                                        </td>

                                                                        <td class="description rate-option top">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div style="padding-bottom:7px;"><a data-url="room-information.aspx?hotelkey===QTUF1M&amp;key==0EVBBTTB1TP&amp;type=roomtype" class="ajax-modal">'; echo "$roomtype"; echo '</a>
                                                                                        <div style="padding-bottom:7px;">
                                                                                            <b>
                                                                                            </b>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="icon-highlighted">
                                                                                        
                                                                                        <img src="Images/icons2.jpg">
                                                                                        <span>
                                                                                            <i class="full-payment">
                                                                                            </i>
                                                                                            Full payment
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons4.jpg">
                                                                                        <span>
                                                                                            <i class="bathtub">
                                                                                            </i>
                                                                                            Bathtub
                                                                                        </span>

                                                                                        <img src="Images/icons3.jpg">
                                                                                        <span>
                                                                                            <i class="air-conditioning">
                                                                                            </i>
                                                                                            Air-Con
                                                                                        </span>

                                                                                        <img src="Images/icons7.jpg">
                                                                                        <span>
                                                                                            <i class="balcony">
                                                                                            </i>
                                                                                            Swimming Pool
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons1.jpg">
                                                                                        <span>
                                                                                            <i class="view">
                                                                                            </i>
                                                                                            Internet
                                                                                        </span>

                                                                                        <img src="Images/icons5.jpg">
                                                                                        <span>
                                                                                            <i class="mini-bar">
                                                                                            </i
                                                                                            >Mini Bar
                                                                                        </span>

                                                                                        <img src="Images/icons6.jpg">
                                                                                        <span>
                                                                                            <i class="private-bathroom">
                                                                                            </i>
                                                                                            Private bathroom
                                                                                            <font size="3">
                                                                                                <br><br>Cancellation Policy :<br>
                                                                                                - Cancellation : Cancel 7 days prior to arrival 1 night charge.<br>
                                                                                                - No Show will be charge the full amount.<br>

                                                                                                Refund Policy :<br>
                                                                                                - Any refund will be deducted 5% of total booking amount as administrations bank fee<br>
                                                                                            </font>
                                                                                        </span>
                                                                                    </div>

                                                                                    <ul>
                                                                                        <strong>
                                                                                                <span style="color: #ff6600;">
                                                                                                        Free WiFi Internet at Lobby.<br>
                                                                                                </span>
                                                                                            </strong>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="price" aling="center">
                                                                            <div>
                                                                                <div align="center">
                                                                                    <tooltip class="tooltip-occupancy" title="" >
                                                                                        <strike><font size="3">'; echo "$standard"; echo '</strike>
                                                                                            <br>'; echo "$standard1"; echo '</font>
                                                                                        
                                                                                    </tooltip>
                                                                                </div>
                                                                                <br>
                                                                                <div  aling="center"><font size="1" color="red">Incl. Service Charge &amp; 7% VAT
                                                                                </font>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="no-of-room">
                                                                            <div>
                                                                                <select name="NumberRoom" class="form-control dropdown-list-no-of-room">
                                                                                    <option value="0" class="zero">0</option>
                                                                                    <option value="1" class="ic">1</option>
                                                                                    <option value="2" class="ic">2</option>
                                                                                    <option value="3" class="ic">3</option>
                                                                                    <option value="4" class="ic">4</option>
                                                                                    <option value="5" class="ic">5</option>
                                                                                    <option value="6" class="ic">6</option>
                                                                                    <option value="7" class="ic">7</option>
                                                                                    <option value="8" class="ic">8</option>
                                                                                    <option value="9" class="ic">9</option>
                                                                                    <option value="10" class="ic">10</option>

                                                                                </select>

                                                                                <input type="submit" value="BOOK NOW"  class="form-control button-book-now">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        ';
                                                        break;
                                                }

                                            }

                                            mysqli_close($connect);
                                        }elseif($roomtype=="EXECUTIVE PAVILION SEA VIEW"){

                                            $datelow1=date("2016-05-02");
                                            $datelow2=date("2016-10-31");

                                            $datenormal1=date("2016-11-01");
                                            $datenormal2=date("2016-12-19");

                                            $datepeak1=date("2016-12-20");
                                            $datepeak2=date("2017-01-20");

                                            if($checkin>=$datelow1 && $checkin<=$datelow2){
                                                $standard1="5000";
                                            }elseif($checkin>=$datenormal1 && $checkin<=$datenormal2){
                                                $standard1="7000";
                                            }elseif($checkin>=$datepeak1 && $checkin<=$datepeak2){
                                                $standard1="8000";
                                            }
                                            // check empty room
                                            $connect = mysqli_connect("localhost","root","","projectwebpro");
                                            $sql = 'select CheckInDate,CheckOutDate from customers_booking_rooms where RoomsID="'.$roomid.'" ';
                                            $result = mysqli_query($connect,$sql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                if(($checkin >= $row['CheckInDate'] && $checkin <= $row['CheckOutDate']) || ($checkout >= $row['CheckInDate'] && $checkout <= $row['CheckOutDate'])){
                                                    
                                                    echo ' 
                                                            <div class="col-md-12">
                                                            <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype" align="center"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount" align="center">Stay Total <em>in THB</em></td><td class="no-of-room" align="center">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                 <tbody>
                                                                    <tr id="PresentationMessageRateRoomType" class="message" style="height:75px;">
                                                                        <td colspan="6" align="center">';    
                                                                        echo '</b><br><div style="padding-top:10px; color:#f00;">No rooms available in your selected period.';echo "   $checkin => $checkout"; echo' </div>
                                                                        </td>
                                                                    </tr>
                                                                 </tbody>
                                                            </table>
                                                    ';
                                                    break;
                                                }else{
                                                    
                                                    echo '<input type="hidden" name="Money" value="'; echo $standard1; echo '">';
                                                    echo '  
                                                            <div class="col-md-12">
                                                                <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount">Stay Total <em>in THB</em></td><td class="no-of-room">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="separator">
                                                                        <td class="description fill top" id="top-roomrate0" rowspan="2">
                                                                            <div class="row" align="center">
                                                                                <div class="col-md-12"><u><a href="'; echo "$roomtype.php"; echo '" class="ajax-modal">'; echo "$roomtype"; echo '</a></u>
                                                                                </div>
                                                                                <img alt="image" class="img-responsive" src="http://www.goldenbeach-resort.com/images/deluxe03.jpg" style="width:300px;height:200px;">    
                                                                            </div>
                                                                        </td>

                                                                        <td class="description rate-option top">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div style="padding-bottom:7px;"><a data-url="room-information.aspx?hotelkey===QTUF1M&amp;key==0EVBBTTB1TP&amp;type=roomtype" class="ajax-modal">'; echo "$roomtype"; echo '</a>
                                                                                        <div style="padding-bottom:7px;">
                                                                                            <b>
                                                                                            </b>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="icon-highlighted">
                                                                                        
                                                                                        <img src="Images/icons2.jpg">
                                                                                        <span>
                                                                                            <i class="full-payment">
                                                                                            </i>
                                                                                            Full payment
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons4.jpg">
                                                                                        <span>
                                                                                            <i class="bathtub">
                                                                                            </i>
                                                                                            Bathtub
                                                                                        </span>

                                                                                        <img src="Images/icons3.jpg">
                                                                                        <span>
                                                                                            <i class="air-conditioning">
                                                                                            </i>
                                                                                            Air-Con
                                                                                        </span>

                                                                                        <img src="Images/icons7.jpg">
                                                                                        <span>
                                                                                            <i class="balcony">
                                                                                            </i>
                                                                                            Swimming Pool
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons1.jpg">
                                                                                        <span>
                                                                                            <i class="view">
                                                                                            </i>
                                                                                            Internet
                                                                                        </span>

                                                                                        <img src="Images/icons5.jpg">
                                                                                        <span>
                                                                                            <i class="mini-bar">
                                                                                            </i
                                                                                            >Mini Bar
                                                                                        </span>

                                                                                        <img src="Images/icons6.jpg">
                                                                                        <span>
                                                                                            <i class="private-bathroom">
                                                                                            </i>
                                                                                            Private bathroom
                                                                                            <font size="3">
                                                                                                <br><br>Cancellation Policy :<br>
                                                                                                - Cancellation : Cancel 7 days prior to arrival 1 night charge.<br>
                                                                                                - No Show will be charge the full amount.<br>

                                                                                                Refund Policy :<br>
                                                                                                - Any refund will be deducted 5% of total booking amount as administrations bank fee<br>
                                                                                            </font>
                                                                                        </span>
                                                                                    </div>

                                                                                    <ul>
                                                                                        <strong>
                                                                                                <span style="color: #ff6600;">
                                                                                                        Free WiFi Internet at Lobby.<br>
                                                                                                </span>
                                                                                            </strong>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="price" aling="center">
                                                                            <div>
                                                                                <div align="center">
                                                                                    <tooltip class="tooltip-occupancy" title="" >
                                                                                        <strike><font size="3">'; echo "$standard"; echo '</strike>
                                                                                            <br>'; echo "$standard1"; echo '</font>
                                                                                        
                                                                                    </tooltip>
                                                                                </div>
                                                                                <br>
                                                                                <div  aling="center"><font size="1" color="red">Incl. Service Charge &amp; 7% VAT
                                                                                </font>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="no-of-room">
                                                                            <div>
                                                                                <select name="NumberRoom" class="form-control dropdown-list-no-of-room">
                                                                                    <option value="0" class="zero">0</option>
                                                                                    <option value="1" class="ic">1</option>
                                                                                    <option value="2" class="ic">2</option>
                                                                                    <option value="3" class="ic">3</option>
                                                                                    <option value="4" class="ic">4</option>
                                                                                    <option value="5" class="ic">5</option>
                                                                                    <option value="6" class="ic">6</option>
                                                                                    <option value="7" class="ic">7</option>
                                                                                    <option value="8" class="ic">8</option>
                                                                                    <option value="9" class="ic">9</option>
                                                                                    <option value="10" class="ic">10</option>

                                                                                </select>

                                                                                <input type="submit" value="BOOK NOW"  class="form-control button-book-now">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        ';
                                                        break;
                                                }

                                            }

                                            mysqli_close($connect);
                                        }elseif($roomtype=="EXECUTIVE PAVILION GARDEN VIEW"){

                                            $datelow1=date("2016-05-02");
                                            $datelow2=date("2016-10-31");

                                            $datenormal1=date("2016-11-01");
                                            $datenormal2=date("2016-12-19");

                                            $datepeak1=date("2016-12-20");
                                            $datepeak2=date("2017-01-20");

                                            if($checkin>=$datelow1 && $checkin<=$datelow2){
                                                $standard1="5500";
                                            }elseif($checkin>=$datenormal1 && $checkin<=$datenormal2){
                                                $standard1="7770";
                                            }elseif($checkin>=$datepeak1 && $checkin<=$datepeak2){
                                                $standard1="8800";
                                            }
                                            // check empty room
                                            $connect = mysqli_connect("localhost","root","","projectwebpro");
                                            $sql = 'select CheckInDate,CheckOutDate from customers_booking_rooms where RoomsID="'.$roomid.'" ';
                                            $result = mysqli_query($connect,$sql);
                                            while($row = mysqli_fetch_assoc($result)){
                                                if(($checkin >= $row['CheckInDate'] && $checkin <= $row['CheckOutDate']) || ($checkout >= $row['CheckInDate'] && $checkout <= $row['CheckOutDate'])){
                                                    
                                                    echo ' 
                                                            <div class="col-md-12">
                                                            <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype" align="center"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount" align="center">Stay Total <em>in THB</em></td><td class="no-of-room" align="center">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                 <tbody>
                                                                    <tr id="PresentationMessageRateRoomType" class="message" style="height:75px;">
                                                                        <td colspan="6" align="center">';    
                                                                        echo '</b><br><div style="padding-top:10px; color:#f00;">No rooms available in your selected period.';echo "   $checkin => $checkout"; echo' </div>
                                                                        </td>
                                                                    </tr>
                                                                 </tbody>
                                                            </table>
                                                    ';
                                                    break;
                                                }else{
                                                    
                                                    echo '<input type="hidden" name="Money" value="'; echo $standard1; echo '">';
                                                    echo '  
                                                            <div class="col-md-12">
                                                                <table id="table_RateRoomType" class="rate table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <td class="description roomtype"><b>Room Type</b></td><td>Rates &amp; Options</td><td class="total-amount">Stay Total <em>in THB</em></td><td class="no-of-room">No. of Room</td>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr class="separator">
                                                                        <td class="description fill top" id="top-roomrate0" rowspan="2">
                                                                            <div class="row" align="center">
                                                                                <div class="col-md-12"><u><a href="'; echo "$roomtype.php"; echo '" class="ajax-modal">'; echo "$roomtype"; echo '</a></u>
                                                                                </div>
                                                                                <img alt="image" class="img-responsive" src="http://www.goldenbeach-resort.com/images/deluxe03.jpg" style="width:300px;height:200px;">    
                                                                            </div>
                                                                        </td>

                                                                        <td class="description rate-option top">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div style="padding-bottom:7px;"><a data-url="room-information.aspx?hotelkey===QTUF1M&amp;key==0EVBBTTB1TP&amp;type=roomtype" class="ajax-modal">'; echo "$roomtype"; echo '</a>
                                                                                        <div style="padding-bottom:7px;">
                                                                                            <b>
                                                                                            </b>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="icon-highlighted">
                                                                                        
                                                                                        <img src="Images/icons2.jpg">
                                                                                        <span>
                                                                                            <i class="full-payment">
                                                                                            </i>
                                                                                            Full payment
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons4.jpg">
                                                                                        <span>
                                                                                            <i class="bathtub">
                                                                                            </i>
                                                                                            Bathtub
                                                                                        </span>

                                                                                        <img src="Images/icons3.jpg">
                                                                                        <span>
                                                                                            <i class="air-conditioning">
                                                                                            </i>
                                                                                            Air-Con
                                                                                        </span>

                                                                                        <img src="Images/icons7.jpg">
                                                                                        <span>
                                                                                            <i class="balcony">
                                                                                            </i>
                                                                                            Swimming Pool
                                                                                        </span>
                                                                                        
                                                                                        <img src="Images/icons1.jpg">
                                                                                        <span>
                                                                                            <i class="view">
                                                                                            </i>
                                                                                            Internet
                                                                                        </span>

                                                                                        <img src="Images/icons5.jpg">
                                                                                        <span>
                                                                                            <i class="mini-bar">
                                                                                            </i
                                                                                            >Mini Bar
                                                                                        </span>

                                                                                        <img src="Images/icons6.jpg">
                                                                                        <span>
                                                                                            <i class="private-bathroom">
                                                                                            </i>
                                                                                            Private bathroom
                                                                                            <font size="3">
                                                                                                <br><br>Cancellation Policy :<br>
                                                                                                - Cancellation : Cancel 7 days prior to arrival 1 night charge.<br>
                                                                                                - No Show will be charge the full amount.<br>

                                                                                                Refund Policy :<br>
                                                                                                - Any refund will be deducted 5% of total booking amount as administrations bank fee<br>
                                                                                            </font>
                                                                                        </span>
                                                                                    </div>

                                                                                    <ul>
                                                                                        <strong>
                                                                                                <span style="color: #ff6600;">
                                                                                                        Free WiFi Internet at Lobby.<br>
                                                                                                </span>
                                                                                            </strong>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="price" aling="center">
                                                                            <div>
                                                                                <div align="center">
                                                                                    <tooltip class="tooltip-occupancy" title="" >
                                                                                        <strike><font size="3">'; echo "$standard"; echo '</strike>
                                                                                            <br>'; echo "$standard1"; echo '</font>
                                                                                        
                                                                                    </tooltip>
                                                                                </div>
                                                                                <br>
                                                                                <div  aling="center"><font size="1" color="red">Incl. Service Charge &amp; 7% VAT
                                                                                </font>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="no-of-room">
                                                                            <div>
                                                                                <select name="NumberRoom" class="form-control dropdown-list-no-of-room">
                                                                                    <option value="0" class="zero">0</option>
                                                                                    <option value="1" class="ic">1</option>
                                                                                    <option value="2" class="ic">2</option>
                                                                                    <option value="3" class="ic">3</option>
                                                                                    <option value="4" class="ic">4</option>
                                                                                    <option value="5" class="ic">5</option>
                                                                                    <option value="6" class="ic">6</option>
                                                                                    <option value="7" class="ic">7</option>
                                                                                    <option value="8" class="ic">8</option>
                                                                                    <option value="9" class="ic">9</option>
                                                                                    <option value="10" class="ic">10</option>

                                                                                </select>

                                                                                <input type="submit" value="BOOK NOW"  class="form-control button-book-now">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        ';
                                                        break;
                                                }

                                            }

                                            mysqli_close($connect);
                                        }
                                    }
                               ?>
                                <div class="col-md-12">
                                    * Rates are inclusive of service charge and 7% tax.
                                </div>
                            </div>
                             </form>

                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 footer" style=" margin: 70px auto; padding: 0px;">
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
</body>