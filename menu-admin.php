<?php
    function menu_admin(){
        echo '
            <div style="border: none;">
             <h3>Rooms</h3>
                <ul>
                    <li><a href="addrooms.php">Add Rooms</a></li>
                </ul>

            <h3>Tours</h3>
                <ul>
                    <li><a href="addtours.php">Add Tours</a></li>
                </ul>
           

            <h3>User</h3>
        		<ul>
        			<li><a href="userdetail.php">User Detail</a></li>
        			<li><a href="adduser.php">Add User</a></li>
                    <li><a href="deleteuser.php">Delete User</a></li>
        		</ul>
            </div>
           
            ';

    }
?>
