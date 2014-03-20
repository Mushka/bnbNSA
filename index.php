

<html ng-app>
<head>
	<title>bnbNSA webapp project</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.14/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="controller.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<head>
<body>
	<div id="container" >
		<form ng-submit='TestController()' ng-keypress="clear()">
			<input type="text" id="loginField" ng-model='user.login' autofocus="true"  />
		</form>
		<form method="POST" action="api.php">
			<input type="text" name="rfid" autofocus="true"  />
				<input type="submit" name="submit" value="go"  />
		</form>
		<p id="welcomeMessage">{{user.login}}</p>
	</div>
	<div id="placeholder"></div>





<script>
$(document).ready(function(){
  $("button").click(function(){
    $.post("api.php",
    {
      action:"getuserinfo",
      rfid:"15507890"
    },
    function(data,status){
     
});
    });
  });

$.getJSON( "http://localhost/club/api.php?action=getuserinfo&rfid=15507890", function( json ) {
  document.getElementById("welcomeMessage").innerHTML=json.uname+" "+json.urfid;
});
</script>


<button>zab</button>



</body>
</html>
</body>
</html>
