<!DOCTYPE html>
<html>
<head>
	<?php
		include("header.php");
		include("menu-admin.php");
		$connect = mysqli_connect("localhost","root","","projectwebpro");
		$sql = "select RoomsType from rooms";
		$result = mysqli_query($connect,$sql);
	?>
</head>
<body>
	<div class="box-left">
		<?php
			menu_admin();
		?>
	</div>


	<div class="box-right">
		<h3>Add New Rooms</h3>
		<form action="addroomsbg.php" method="post"><br>
			<ul><div class="box-left">Rooms No</div>
					<div class="box-right" ><input type = "text" name="roomsno" class="form-control" placeholder="Rooms No" style="width: 300px;" required></b></p></div></ul>
			<ul><div class="box-left">Rooms Type</div>
			<div class="box-right" >
			<select name="roomstype" class="form-control" style="width: 300px;" required>
			<?php
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="';
					foreach ($row as $key => $value) {
						echo $value;
						echo '">';
						echo $value;
						echo '</option>';
					}
				}
			?>
			</select></b></p></div></ul><br><br><br>
			<ul><div class="box-left">Rooms Price</div>
					<div class="box-right" ><input type = "text" name="roomsprice" class="form-control" placeholder="Rooms Price" style="width: 300px;" required></b></p></div></ul>
			<ul><div class="box-left">Rooms Status</div>
					<div class="box-right" >
					<select name="roomsstatus" class="form-control" style="width: 300px;" required>
						<option value="Available">Available</option>
						<option value="Reserve">Reserve</option>
					</select>
					</b></p></div></ul>
			<div class="box-right"><input type="submit" name="Add New Rooms" value="Add" class="btn btn-primary btn-block" ><br><br><br><br><br><br><br><br></div>
		</form>
	</div>

</body>
<div style="padding-left: 90px;">
    <div class="col-md-12" >
        <div class="row footer" >
            <div class="col-md-6 footer-left" align="left" style="background-color: white;">
                <b>EjiLeader Resort and Spa</b><br>
                PSU Phuket, Kathu, Kathu, Phuket 83120<br>
                Telephone : 076276012-(13)&nbsp;&nbsp;Fax : 076276002<br>
                GPS : N8.02999425344937 / E98.8238769795623 
            </div>
            <div class="col-md-6 footer-right" style="background-color: white;">
                <a href="/project_webpro/Rooms/Index-cus.php">
                <img src="Images/u.png" height="80" width="500"></a>
            </div>
        </div>
    </div>
</div>
</html>