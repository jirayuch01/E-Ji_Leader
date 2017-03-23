<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
<?php
	$connect = new mysqli("localhost","root","","projectwebpro");
	require("menu-admin.php");
	require("header-nofooter.php");
?>
	<div class="box-left" style="background-color: transparent;">
	<br><br>
<?php
			menu_admin();
?>
	</div>

	<div class="box-right" style="border: none;">
		<div style="border: none;">
		<br><br>
<?php
	$sql = "select * from admin_system  order by Status";
	$query = $connect->query($sql);
	$result = $query->fetch_object();
	if(!$result){
		//echo $result->user_name;
		echo "<strong>Can't connect database </strong>";
	}else{
		echo '<table border=1 width="700" class="table table-bordered table-hover">';
		echo '<tr class="active"><strong>';
		echo '<td><center><strong>Username</strong></center></td>';
		echo '<td><center><strong>Firstname</strong></center></td>';
		echo '<td><center><strong>Lastname</strong></center></td>';
		echo '<td><center><strong>Birthday</strong></center></td>';
		echo '<td><center><strong>Address</strong></center></td>';
		echo '<td><center><strong>Status</strong></center></td>';
		echo '<td><center><strong>Sex</strong></center></td>';
		echo '</tr>';

		if($query = $connect->query($sql)){
			while($obj = $query->fetch_object()){
				echo '<form name="frmEdit'.$obj->id.'" method="post" action="edituser.php">';
				echo '<tr>';
				echo '<td height="10" width="100"> '.$obj->user_name.'</td>';
				echo '<td height="10" width="100"> '.$obj->fname.'</td>';
				echo '<td height="10" width="100"> '.$obj->lname.'</td>';
				echo '<td height="10" width="100"> '.$obj->birthday.'</td>';
				echo '<td height="10" width="100"> '.$obj->address.'</td>';
				echo '<td height="10" width="100"> '.$obj->Status.'</td>';
				echo '<td height="10" width="100"> '.$obj->sex.'</td>';
				echo '</tr>';
				echo '</form>';
			}
		}
		echo '</table>';
	}
?>
<br><br><br><br><br>
        </div>
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