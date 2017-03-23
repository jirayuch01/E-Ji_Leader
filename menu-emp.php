<?php
    function menu_emp(){
        echo '
            <div style="border: none;">
                <h3>Rooms</h3>
        		<ul>
        			<li><a href="deleteReserve.php">Delete Rooms Reservation</a></li>
                    <li><a href="report-room.php">Print Rooms Reservation Report</a></li>
        		</ul>
                <h3>Tours</h3>
                <ul>
                    <li><a href="deleteReserveTour.php">Delete Tours Reservation</a></li>
                    <li><a href="report-tours.php">Print Tours Reservation Report</a></li>
                </ul>
            </div>
            ';
    }
?>
