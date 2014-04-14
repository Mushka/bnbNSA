<?php
 header('Content-type: 	application/json');


	require_once("function.php");
	require_once("api.class.php");

	$bnbnsa = new bnbnsa();
	$api = new Api();
	
	echo json_encode($api->data);

?>




