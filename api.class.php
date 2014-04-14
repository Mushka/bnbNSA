<?php




Class Api {

	Public $data=array();
	protected $method;
	public $key;
	public $blocksize;
	public $mode;

 function __construct($data = null, $key = null, $blockSize = null, $mode = null) {
  $this->data = json_decode(file_get_contents("php://input"), true);
  $this->method = strtolower($_SERVER['REQUEST_METHOD']);
  ($_SERVER['REQUEST_METHOD']) ? $this->HttpMethod($this->method): null ;

}



function HttpMethod($method){

	switch ($method) {
    case 'get':
    {    $this->data = $_GET;
    	 $this->method = "HTTPGET";

            break;     
            }                                                                                                                     
    case 'post':
        {
        	$this->data = $_POST;
        	$this->method = "HTTPPOST";
                break;
        }
    case 'put':
      {
        $this->data;
      	$this->method = "HTTPPUT";
              break;
      }
    case 'delete':
      { 

       $this->data;
       $this->method = "HTTPDELETE";
              break;
      }

      default;{
       $this->data=null;
      break;
}
    }
}




}