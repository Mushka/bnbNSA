<?php
 header('Content-type: 	application/json');


	require_once("function.php");

	$bnbnsa = new bnbnsa();

	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "GET")
	{


	
	if(isset($_GET['action']) and $_GET['action'] == "getuserinfo")
	{
        $rfid =  (isset($_GET['rfid'])) ? $_GET['rfid'] : 0;
         
		echo $bnbnsa->get_uData($rfid);
		exit;
	}
	
	if(isset($_GET['action']) and $_GET['action'] == "delete"){


		// $bnbnsa->deletebnbnsa($_GET['id']);
		// exit;
	}

	if(isset($_GET['action']) and $_GET['action'] == "add")
	{

		
		// $bnbnsa->deletebnbnsa($_GET['id']);
		// exit;
	}
	if(isset($_GET['action']) and $_GET['action'] == "check")
	{

		 $rfid =  (isset($_GET['rfid'])) ? $_GET['rfid'] : 0;
	    eCHO $bnbnsa->checkrfid($rfid);
		// $bnbnsa->deletebnbnsa($_GET['id']);
		// exit;
	}
	
	}





	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	 $rfid =  (isset($_POST['rfid'])) ? $_POST['rfid'] : 0;
	$bnbnsa->checkrfid($rfid);
		exit;
	}
	
?>




