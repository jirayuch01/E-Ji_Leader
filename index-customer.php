<html>
 <head></head>
 <body> 
  <link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/assets/layout-c0934f68b4.css" /> 
  <link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/layout-3752f8b1d8.css" /> 
  <link rel="stylesheet" href="https://cdn6.agoda.net/images/mvc/styles/assets/home/index/entry-7bf6bee1cd.css" /> 
  <?php
	   require("header.php");
     require("menu-cus.php");
  ?>
  <br />
  <br />
  <br /> 
  <div class="box-left">
    <?php
      menu();
    ?>
  </div>
<form action="test.php" method="post">  <div class="box-right"> 
   <div class="container-agoda"> 
    <div id="hero-banner-hosted"> 
     <ul id="hero-banner-tab-nav" class="ag-tab-nav clearfix"> 
      <li class="active"><a href="#tab-hotel" data-toggle="tab" data-tab="hotel">Rooms</a></li> 
     </ul> 
     <div class="tab-content"> 
      <div id="tab-hotel" class="tab-pane active"> 
       <div id="oneline-searchbox" class="oneline-searchbox" data-selenium="searchBox"> 
        <dl class="form-group"> 
         <dt>
          Room Type
         </dt> 
         <dd> 
          <select name="selectRoomType" class="form-control oneline-checkin checkin-input date-input hasDatepicker">
          	<option value="">Select Room Type</option>
          	<option value="Suite_Grand">ห้องสวีท ห้องแกรนด์ (Suite Grand)</option>
          	<option value="Deluxe">ห้องดีลักซ์ (Deluxe)</option>
          	<option value="Grand_Deluxe">ห้องแกรนด์ ดีลักซ์ (Grand Deluxe)</option>
          	<option value="Junior_Suite_Standard">จูเนียร์ สวีท มาตรฐาน (Junior Suite Standard)</option>
          	<option value="Deluxe_Pool_View">ห้องดีลักซ์ วิวสระน้ำ (Deluxe Pool View)</option>
          </select>
          <div id="recentSearchAndTopDestinationPanel" class="ctrl-topDestination" data-selenium="topDestinationPanel" style="display: none;"> 
          </div> 
         </dd> 
        </dl> 
        <dl class="form-group"> 
         <dt>
          Check-in:
         </dt> 
         <dd> 
          <input type="date" class="form-control oneline-checkin checkin-input date-input hasDatepicker" /> 
          <i class="icon icon-calendar"></i> 
         </dd> 
        </dl> 
        <dl class="form-group"> 
         <dt>
          Check-out:
         </dt> 
         <dd> 
          <input type="date" class="form-control oneline-checkout checkout-input date-input hasDatepicker" /> 
          <i class="icon icon-calendar"></i> 
         </dd> 
        </dl> 

        <dl class="form-group" style="display:block;width:50%;height:45%;"> 
         <dt>
          Room
         </dt> 
         <dd>
         	<input type="number" name="Room" placeholder="Room" class="form-control" style="display:block;width:50%;height:45%;" min="0">
         </dd>
         </dl>

		<dl class="form-group"> 
         <dt>
          Adult 
          </dt> 
          <dd>
          <input type="number" name="adult" placeholder="Adult" class="form-control oneline-checkin checkin-input date-input hasDatepicker" min="0">
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
        <dl class="form-actions"> 
         <dt>
          
         </dt> 
         <dd> 
          <button type="submit" class="btn btn-primary" data-selenium="searchButton"> <span class="js-search-button-unclicked-label" onclick=""> Search </span> 
          </button> 
         </dd> 
        </dl> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>
  </form>
 </body>
</html>