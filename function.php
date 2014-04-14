<?php


include_once('config.php'); // including config file

// new class
class bnbnsa {

 public function __construct()
  {
    // connect to database
    $this->_db = new mysqli(_DBHOST,_DBUSER,_DBPASS,_DBNAME);
}

// function that check if rfid exist
public function checkrfid($rfid)

{


	$query="SELECT * From users WHERE urfid=?"; // sql query
	$stmt=$this->_db->prepare($query); // prepare the statment
	$stmt->bind_param('i',$rfid); // bind the parameter
    $stmt->execute();

    ($stmt->fetch()) ? $data=1 : $data=0 ; // check if it exist in the database
     $data = array('userexist' => $data );
     return json_encode($data);


}

	public function get_uData($rfid) 
	{
  //       $result = $this->_db -> query("SELECT * FROM users WHERE urfid = $rfid");
		// $obj=$result->fetch_object();
	
		// switch ($dType){
		// 	case 'ID': echo $obj->uid; break;
		// 	case 'UN': echo $obj->urfid; break;
		// 	case 'PW': echo $obj->uname; break;
		// 	case 'N': echo $obj->utime; break;
		
		// 	case 'all': echo '</br>'.'User Info:'; echo '</br>';
		// 				foreach ($obj as $k=> $v){
		// 					echo $k.' : ',$v; echo '</br>';
		// 				};break;
		// 	default: echo "Default user data-check your variables.";
		// 	}

        if($rfid<1 ) return;
		$query ="SELECT * FROM users WHERE urfid = $rfid";
		$stmt=$this->_db->prepare($query);
	    $stmt->execute();
	
		$result = $stmt->get_result();
        if ($row = $result->fetch_array(MYSQLI_ASSOC)){

        	return json_encode($row);
        }
        
       
            return 0;
        
	

	 //    $data[] = array("uid" => $row->uid,
						  // "urfid" => $row->urfid,
						  // "uname" => $row->uname,
						  // "utime" => $row->utime);

	}

	 public function validate($var)
  {
    $var = trim($var);
    $var = stripslashes($var);
    $var = preg_replace('/[^a-zA-Z0-9]/','',$var);
    $var = htmlspecialchars($var);
    return $var;
  }



}