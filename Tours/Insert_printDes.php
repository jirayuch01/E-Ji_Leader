<?php
	include("Header.php");
	include("menu-cus.php");
		$connect = mysqli_connect("localhost" , "root" , "" , "projectwebpro");
		$sql     = 'SELECT * 
					FROM tours_detail';
		$result  = mysqli_query($connect, $sql);
	?>
<div class="box-left">
	<?php
		menu();
	?>
</div>

<div class="box-right">
	<?php
	
		if (!$result) {
			echo mysqli_error().'<br>';
			die('Can not access database!');
		} else {

	  echo '<table style="border: 1;"  class="table table-bordered table-hover">';
	  echo '<tr class="active">';
	  echo '<td align="center" >Activityname</td>';
	  echo '<td align="center" >Price</td>';
	  echo '</tr>';
	if($query = $connect->query($sql))
	{
		while($obj = $query->fetch_object()){
	   	echo '<tr>';
	 	 echo "<td align='center'>$obj->Activityname</td>";
	 	 echo "<td align='center'>$obj->Price</td>";
	 	 echo '</tr>';

		}
	} 
	  echo '</table>';
	}
	  	  ?>
	  <br><br><br><br><br><br><br><br><br><br><br><br>
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