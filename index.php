<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include('function.php');

  
 $rfid =  (isset($_POST['rfid'])) ? $_POST['rfid'] : 1;
 
      


$bnbnsa = new bnbnsa();
echo $bnbnsa->checkrfid($rfid); 
}



?>



<form method="POST" action="">
<table>
 <tr><td>post:</td><td><input type="text" name="rfid" /></td></tr>

</table>

<input type="submit" name="login" value="Log In" />
</form>


