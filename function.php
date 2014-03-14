<?php


include_once('config.php');


class bnbnsa {

 public function __construct()
  {

    $this->_db = new mysqli(_DBHOST,_DBUSER,_DBPASS,_DBNAME);
}

public function checkrfid($rfid)

{


	$query="SELECT * From users WHERE urfid=?";
	$stmt=$this->_db->prepare($query);
	$stmt->bind_param('i',$rfid);
	$check = $stmt->execute();

	if($stmt->fetch())
      {
        list($this->_id) = $check;
        return 1;
      }
    else
      { return 0; }


}



}