<?php
 header('Content-type: 	application/json');


	require_once("function.php");
	$bnbnsa= new bnbnsa();

	

	if(isset($_GET) and $_SERVER['REQUEST_METHOD'] == "GET")
	{


	
	if(isset($_GET['action']) and $_GET['action'] == "user")
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

$data = json_decode(file_get_contents('php://input'), true);
$action= $bnbnsa->validate($data["action"]);
$rfid =  $bnbnsa->validate($data["rfid"]);


	if(!empty($rfid) && $action =="user")

	{
	 echo $bnbnsa->checkrfid($rfid);

		exit;
	}








	}
	
?>




