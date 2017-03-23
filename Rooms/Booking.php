<body background="http://www.goldenbeach-resort.com/images/slide-1.jpg" style="background-attachment:fixed";>
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

        $roomtype=$_POST['selectRoomType'];
        $checkin=$_POST['Check-in'];
        $checkout=$_POST['Check-out'];
        $rooms=$_POST['NumberRoom'];
        $adult=$_POST['Adult'];
        $children=$_POST['Children'];
        $standard1=$_POST['Money'];
    ?>

<form name="form1" method="post" action="Booking-Complete.php" onSubmit="JavaScript:return fncSubmit();">
    <div class="container">   
        <div class="row" style="background-color: #f7f5f6; border-top: 1px solid #dadada; overflow: hidden;">
            <div class="col-md-12 page">
                <div class="col-md-12" style="background-color: #FFF; margin: 15px 0px auto; padding: 0px;">
                    <div class="col-md-12">        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-form">
                                    <h2><b class="title-pointer">1&nbsp;</b>Your Selections</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row panel-your-selections">
                                    <div class="col-md-10 title">
                                        <div class="col-md-6"><b>Check-in : </b>
                                            <?php 
                                                echo "$checkin";
                                            ?>
                                        </div>
                                        <div class="col-md-6"><b>Check-out : </b>
                                            <?php 
                                                echo "$checkout";
                                            ?>
                                        </div>
                                        <div class="col-md-6"><b>Number of Persons : </b>
                                            <?php 
                                                echo "$adult Adult, $children Children";
                                            ?>
                                        </div>
                                        <div class="col-md-6"><b>Number of Room : </b>
                                            <?php 
                                                echo "$rooms";
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <table id="table_Rate" class="rate table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="description" style="width:50%;" ><b>Room Type</b></th><th style="width:10%;">Night<br>(dd/mm/yyyy)</th><th style="width:10%;">Rate<br>(THB)</th><th style="width:15%;">Status</th><th style="width:15%;">Stay Total<br><em>in THB</em></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                            <tr class="separator" align="middle">
                                                                <td class="description fill top" id="top-roomrate0" rowspan="2">
                                                                    <div class="row" align="center">
                                                                        <div class="col-md-12"><u><a href="'; echo "$roomtype.php"; echo '" class="ajax-modal"><?php echo "$roomtype"; ?></a></u>
                                                                        </div>
                                                                        <img alt="image" class="img-responsive" src="http://www.goldenbeach-resort.com/images/deluxe03.jpg" style="width:300px;height:200px;">    
                                                                    </div>
                                                                </td>

                                                                <td class="description rate-option top">
                                                                    <div class="row" >
                                                                        <div class="col-md-12">
                                                                        <?php 
                                                                            echo "$checkin".'<br>'; 
                                                                            echo "v".'<br>';  
                                                                            echo "$checkout"; 
                                                                        ?>  
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td class="description rate-option top">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <?php 
                                                                            echo "$standard1"; 
                                                                            
                                                                        ?>    
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td class="description rate-option top">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <font color="green" size="1">
                                                                                <img src="Images/icon-available.png">
                                                                                ( instant confirmation )  
                                                                            </font>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td class="description rate-option top">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <?php 
                                                                                function DateDiff($strDate1,$strDate2){     
                                                                                    $day=(60*60)*24;
                                                                                    $day1=strtotime($strDate1);
                                                                                    $day2=strtotime($strDate2);
                                                                                    $total1=($day2-$day1)/$day;
                                                                                    return $total1;
                                                                                    // 1 day = 60*60*24
                                                                                }

                                                                                $totalday=DateDiff("$checkin","$checkout");
                                                                                $total =  intval($standard1) * $rooms * $totalday; 
                                                                                echo "$total";
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                <tbody>
                                                     <tr>
                                                        <td class="total-text col-xs-6" colspan="4">
                                                            Grand Total :
                                                        </td>
                                                        <td class="total-price col-xs-6" align="middle">
                                                            <div id="Updatepanel_SummaryPrice">
                                                                <span id="label_SummaryPrice">
                                                                    <?php 
                                                                        echo "$total -";
                                                                    ?>   
                                                                </span>
                                                            </div>
                                                        </td>
                                                     </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        <div class="row">
                            <div class="col-md-12 right">
                                * Rates are inclusive of service charge and 7% tax.
                            </div>
                        </div>               
                    </div>
                </div>
            </div>
            <br>
<?php
    if (!empty($_SESSION['username'])) {
    ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-form">
                        <h2><b class="title-pointer">2&nbsp;</b>Guest Details</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-form blank">
                        <div class="row">
                            <div id="panel_Prefix" class="col-md-2">
                                <div class="form-group" align="left">
                                    <p><b>Title*&nbsp;<b></p>
                                        <select name="Title" class="form-control" style="width:100%;">
                                            <option value=""></option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Miss.">Miss.</option>
                                            <option value="Dr.">Dr.</option>
                                            <option value="Other">Other</option>
                                        </select>
                                </div>
                            </div>
                            <div id="panel_FirstName" class="col-md-3">
                                <div class="form-group">
                                    <p><b>First Name*&nbsp;<b></p>
                                    <input name="FirstName" type="text" maxlength="50" class="form-control" style="width:100%;">
                                </div>
                            </div>
                            <div id="panel_LastName" class="col-md-3">
                                <div class="form-group">
                                    <p><b>Last Name*&nbsp;<b></p>
                                    <input name="LastName" type="text" maxlength="50" class="form-control" style="width:100%;">
                                </div>
                            </div>
                    
                            <div id="panel_EmailAddress" class="col-md-4">
                                <div class="form-group">
                                    <p><b>E-mail*&nbsp;<b></p>
                                    <input name="Email" type="text" maxlength="50" class="form-control" style="width:100%;">
                                    <p class="tip">
                                        <i class="fa fa-info-circle"></i><b>Important ! </b>Your e-mail will be used for this reservation contact.
                                    </p>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    
                </div>
                <div class="row">
                    
                    
                    
                </div>
                <div class="row">
                    <div id="panel_Nationality" class="col-md-3">
                        <div class="form-group">
                            <p><b>Nationality*&nbsp;<b></p>
                            <select name="Nationality" class="form-control" style="width:100%;">
                                <option value=""></option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaçao">Curaçao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestine, State of">Palestine, State of</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Réunion">Réunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Barthélemy">Saint Barthélemy</option>
                                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    <div id="panel_PhoneNumber" class="col-md-5">
                        <div class="form-group">
                            <p><b>Contact Phone number*&nbsp;<b></p>
                            <div class="row">
                                
                                <div class="col-xs-12 col-sm-7">
                                    <input name="PhoneNumber" type="text" maxlength="45" class="form-control" style="width:100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel-form">
                    <h2><b class="title-pointer">3&nbsp;</b>Special Requests</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel-form blank">
                    <div class="row">
                        <div id="panel_Smoking" class="col-md-3">
                            <div class="form-group">
                                <p><b>Smoking*&nbsp;<b></p>
                                <div class="checkbox">
                                    <span >
                                        <input  type="radio" name="Smk" value="Non Smoking" checked> Non - Smoking
                                        <br>
                                        <input  type="radio" name="Smk" value="Smoking"> Smoking
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="panel_Floor" class="col-md-3">
                            <div class="form-group">
                                <p><b>Floor*&nbsp;<b></p>
                                <div class="checkbox">
                                    <span >
                                        <input  type="radio" name="Floor" value="Low Floor" checked> Low Floor
                                        <br>
                                        <input  type="radio" name="Floor" value="High Floor"> High Floor
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="panel_BedType" class="col-md-6">
                            <div class="form-group">
                                <p><b>Bed Type*&nbsp;<b></p>
                                <div class="checkbox">
                                    <span i>
                                        <input type="radio" name="BedType" value="King Bed" checked> King Bed
                                        <br>
                                        <input type="radio" name="BedType" value="Twin Bed"> Twin Bed
                                        <br>
                                        <input type="radio" name="BedType" value="Double Bed"> Double Bed
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
        <div id="panel_PaymentDetail" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-form">
                        <h2><b class="title-pointer">4&nbsp;</b>Confirm</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 blank center">
                <div id="panel_ConfirmThisReservation" style="">
                    <br>
                    <br>
                    <div id="button_Confirm" class="button-confirm" align="center">

                        <script language="javascript">
                            function fncSubmit()
                            {   

                                if(document.form1.Title.value==""){
                                    alert('Please Check your title.');
                                    return false;
                                }

                                if(document.form1.FirstName.value==""){
                                    alert('Please Check your First Name.');
                                    return false;
                                } 

                                if(document.form1.LastName.value==""){
                                    alert('Please Check your Last Name.');
                                    return false;
                                }

                                if(document.form1.Email.value==""){
                                    alert('Please Check your E-mail.');
                                    return false;
                                }

                                if(document.form1.Nationality.value==""){
                                    alert('Please Check your Nationality.');
                                    return false;
                                }


                                if(document.form1.PhoneNumber.value==""){
                                    alert('Please Check your PhoneNumber.');
                                    return false;
                                }


                                if(document.form1.checkbox_Agree.checked == false)
                                {
                                    alert('Please Click Agree The Terms And Conditions');
                                    return false;
                                }else{
                                    
                                }  
                                document.form1.submit();

                                
                            }
                        </script>

                        <input type="hidden" name="selectRoomType" value="<?php echo $roomtype; ?>">
                        <input type="hidden" name="Check-in" value="<?php echo $checkin; ?>">
                        <input type="hidden" name="Check-out" value="<?php echo $checkout; ?>">

                        <form name="form1" method="post" action="Booking-Complete.php" onSubmit="JavaScript:return fncSubmit();">
                            <input name="checkbox_Agree" type="checkbox" id="chk1" value="Y">
                                I have read and agreed to the Terms and Conditions/Cancellation policy 
                                <br>
                                <br>
                                <input type="submit" name="btnSubmit" value="CONFIRM THIS RESERVATION"  class="form-control" style="width:300px;margin-bottom: 15px;">
                                <br>

                            </input>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
    <?php
    }else{
        echo "<script>alert('Please Login !!!');document.location='/project_webpro/login.php'</script>";
    }
?>
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
</body>