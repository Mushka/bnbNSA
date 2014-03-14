function LoggerController($scope){
	$scope.user = {welcome: "", login: ""};

	$scope.computeNeeded = function () {
		if($scope.user.login == "")
			$scope.user.welcome = ""
		else
			$scope.user.welcome = "Hello, " + $scope.user.login;
	} 
}