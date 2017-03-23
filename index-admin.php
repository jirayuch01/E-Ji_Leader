<!DOCTYPE html>
<html>

<head>
<?php
	require("menu-admin.php");
	require("header.php");
?>
</head>
<body>
<?php
	$connect = new mysqli("localhost","root","","projectwebpro");
	$sql = 'select * from admin_system where user_name="'.$_SESSION['username'].'"';
	$query = $connect->query($sql);
	$obj = $query->fetch_object();
	$_SESSION['fname'] = $obj->fname;
?>

	<div class="box-left" style="background-color: transparent;">
		<br><br>
		<?php
			menu_admin();
		?>
	</div>

	<div class="box-right" style="border: none;">
		<div style="border: none;">
		<h1>Admin System - EjiLeader Hotel</h1></a><br><br>
			<strong>Welcome Admin 
				<?php echo $_SESSION['fname'];?>
			</strong>
        </div>
    </div>
</body>

</html>