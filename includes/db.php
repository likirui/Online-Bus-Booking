<?php

$connection = mysqli_connect("localhost",'root','','smartweb');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>