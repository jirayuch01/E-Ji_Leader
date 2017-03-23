<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Eji Leader Hotel</title>
</head>
<?php
	include("header.php");
	include("menu-emp.php");
?>
<script language = "JavaScript">
function confirmDelete() {
	return confirm('Are you sure to clear this reservation?');
}
</script>
<div class="box-left">
<?php
	menu_emp();
	?>
</div>
<body>
<div class="box-right">
<br><br>
<h3>Update Reservation</h3>
	  <?php
	$sql = "select * from customers_booking_rooms";
	$connect = new mysqli("localhost","root","","projectwebpro");
	$query = $connect->query($sql);
	$result = $query->fetch_object();
	$obj = $query->fetch_object();
	if(!$result){
		echo "<strong>No data </strong>";
	}else{
		echo '<table border=1 width="700" class="table table-bordered table-hover">';
		echo '<tr class="active">';
		echo '<td><center><strong>No.</strong></center></td>';
		echo '<td><center><strong>User Name</strong></center></td>';
		echo '<td><center><strong>Rooms No</strong></center></td>';
		echo '<td><center><strong>Check In Date</strong></center></td>';
		echo '<td><center><strong>Check Out Date</strong></center></td>';

		echo '<td><center><strong>Clear</strong></center></td>';
		echo '</tr>';

		if($query = $connect->query($sql)){
			while($obj = $query->fetch_object()){
				echo '<form name="frmDelete'.$obj->RoomsID.'" method="post" action="update.php">';
				echo '<tr>';
				echo '<td height="10" width="100"> '.$obj->idBooking.'</td>';
				echo '<td height="10" width="100"> '.$obj->CustomerID.'</td>';
				echo '<td height="10" width="100"> '.$obj->RoomsID.'</td>';
				echo '<td height="10" width="100"> '.$obj->CheckInDate.'</td>';
				echo '<td height="10" width="100"> '.$obj->CheckOutDate.'</td>';
				echo '<input type="hidden" name="id" value="'.$obj->RoomsID.'">';
				echo '<td height="10" width="100"><center><input name="smtDelete" type="submit" value="Clear" class="btn btn-primary  col-xs-12" onClick="return confirmDelete();"></center></td>';
				echo '</tr>';
				echo '</form>';
			}
			echo '</table>';
		}
	}
?>
</div>
	  
	  </div>
</body>
</html>
