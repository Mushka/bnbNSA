 function LoggerController($scope, $http){

	$scope.computeNeeded = function(user){
		if("undefined" != user.login){
			$http({
			  	method : "POST",
			  	url : "http://localhost/club/api.php", 
				data : { action : "getuserinfo", rfid: user.login

 
				       }
			  }).success(function(data){
				  $scope.userdata = data;
			  });
			$scope.user = "";
		}
	}
	

}


