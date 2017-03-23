
<?php
	
	$connect = new mysqli("localhost","root","","projectwebpro");
	$sql = 'delete from admin_system where id='.$_POST['id'].';';

	$result = $connect->query($sql);
	if($result){
		echo "<script>alert('Delete Success ^ ^');document.location='deleteuser.php'</script>";
	}
	else{
		echo "<script>alert('Delete Faile !!!');document.location='deleteuser.php'</script>";
	}
	mysqli_close($connect);

?>