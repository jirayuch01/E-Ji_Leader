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
	return confirm('Are you sure you want to delete this?');
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
	  <?php
	$sql = "select * from Rooms";
	$connect = new mysqli("localhost","root","","projectwebpro");
	$query = $connect->query($sql);
	$result = $query->fetch_object();
	$obj = $query->fetch_object();
	if(!$result){
		echo "<strong>No data </strong>";
	}else{
		echo '<table border=1 width="700" class="table table-bordered table-hover">';
		echo '<tr class="active">';
		echo '<td><center><strong>Rooms no.</strong></center></td>';
		echo '<td><center><strong>Rooms Type</strong></center></td>';
		echo '<td><center><strong>Rooms Price</strong></center></td>';
		echo '<td><center><strong>Rooms Status</strong></center></td>';
		echo '</tr>';

		if($query = $connect->query($sql)){
			while($obj = $query->fetch_object()){
				
				echo '<tr>';

				echo '<td height="10" width="100"> '.$obj->RoomsNo.'</td>';
				echo '<td height="10" width="100"> '.$obj->RoomsType.'</td>';
				echo '<td height="10" width="100"> '.$obj->RoomsPrice.'</td>';
				echo '<td height="10" width="100"> '.$obj->RoomsStatus.'</td>';
				echo '<input type="hidden" name="id" value="'.$obj->idRooms.'">';

				echo '</tr>';
				
			}
			echo '</table>';
		}
	}
?>
</div>
	  
	  </div>
</body>
</html>
