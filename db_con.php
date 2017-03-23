<?php
	error_reporting(0);
	$con = mysql_connect("localhost","root","1234");
	if ($con) {
		mysql_select_db("projectwebpro", $con);
	}
	error_reporting(E_ALL ^ E_NOTICE);
?>