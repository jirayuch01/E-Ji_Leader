<!DOCTYPE html>
<html>
<head>
	<title>E-Ji Leader Hotel</title>
</head>
<body>
		        <div class="box-left" style="float:left">
		            <img src="Images/u.png" height="80" width="500"></a>
		        </div>
		        <div class="box-right" style="float:right">
		            <b>EjiLeader Resort and Spa</b><br>
		            PSU Phuket, Kathu, Kathu, Phuket 83120<br>
		            Telephone : 076276012-(13)&nbsp;&nbsp;Fax : 076276002<br>
		            GPS : N8.02999425344937 / E98.8238769795623
		        </div>
<br><br><br><br>
<center><h1>--------------------------------------------------------------------------------------------</h1></center>
</body>
</html>


<?php
	$connect = mysqli_connect("localhost", "root", "", "projectwebpro");
	$sql_1 = 'SELECT * 
			  FROM tours
			  INNER JOIN tours_detail 
			  ON tours.Activityname = tours_detail.Activityname';
	$result_1 = mysqli_query($connect, $sql_1);

	function newLine($x) {
        for($i = 0; $i<$x; $i++) {
            echo "<br>";
        }
    }

    function space($y) {
        for($j = 0; $j<$y; $j++) {
            echo '&nbsp';
        }
    }
				echo '<p style="color: red; text-align: center">'; 
				echo '<font size="5" color="red" text-align: center">';

					echo '<b>Tours Reservation Report';
					echo '</font>';
				echo '</p>';

			echo '<font size="5" color="black">';
				date_default_timezone_set("Asia/Bangkok");
				echo 'Summary Report For : ' . date("Y-m-d  h:i:sa") . "<br>";
			echo '</font><br>';

	if(!$result_1) {
		echo mysqli_error().'<br>';
		die('Can not access database');
	} else {
		echo '<table border = "1" cellpading = "0" cellspacing = "0" align = "center">';
			echo '<tr bgcolor="#00FFFF">';
				echo '<td align = "center">';
					echo 'ID Card';
				echo '</td>';	
				echo '<td align = "center">';
					echo 'Customer Name';
				echo '</td>';
				echo '<td align = "center">';
					echo 'E-mail';
				echo '</td>';
				echo '<td align = "center">';
					echo 'Phone Number';
				echo '</td>';
				echo '<td align = "center">';
					echo 'Tours Activity';
				echo '</td>';				
	
				echo '<td align = "center">';
					echo 'Reserve Date';
				echo '</td>';	
				echo '<td align = "center">';
					echo 'Price';
				echo '</td>';																						
			echo '</tr>';

		while($row = mysqli_fetch_array($result_1,MYSQLI_NUM)){
				echo '<tr>';
					echo '<td align = "center">'.$row[2].'</td>';
					echo '<td align = "">'.$row[3].' '.$row[4].'</td>';
					echo '<td align = "">'.$row[1].'</td>';
					echo '<td align = "center">'.$row[6].'</td>';
					echo '<td align = "center">'.$row[10].'</td>';
					echo '<td align = "center">'.$row[5].'</td>';
					echo '<td align = "center">'.$row[11].'</td>';
				echo '</tr>';
		}

	$sql_2 = 'SELECT SUM(tours_detail.price) AS Total
			  FROM tours 
			  INNER JOIN tours_detail 
			  ON tours.Activityname = tours_detail.Activityname';
	$result_2 = mysqli_query($connect, $sql_2);
	if(!$result_2) {
		echo mysqli_error().'<br>';
		die('Can not access database');
	} else {
			echo '<tr bgcolor="#00FFFF">';
				echo '<td align = "center">';
					echo 'Total';
				echo '</td>';	

				echo '<td align = "center">';
				echo '</td>';	

				echo '<td align = "center">';
				echo '</td>';	

				echo '<td align = "center">';
				echo '</td>';	

				echo '<td align = "center">';
				echo '</td>';	

				echo '<td align = "center">';
					while($row = mysqli_fetch_array($result_2,MYSQLI_NUM)){
						echo '<td align = "center">'.$row[0].'</td>';
					}
				echo '</td>';	

			echo '</tr>';
		echo '</table>';
	}
		mysqli_close($connect);
	}
?>