function UsernameController($scope){
	$scope.user = {welcome: "", login: ""};

	$scope.computeNeeded = function () {
		if($scope.user.login == "")
			$scope.user.welcome = ""
		else
			$scope.user.welcome = "Username: " + $scope.user.login;
	}
}

function LoggerController($scope){
	$scope.user = {welcome: "", login: ""};

	$scope.computeNeeded = function () {
		if($scope.user.login == "")
			$scope.user.welcome = ""
		else
			$scope.user.welcome = "Password: " + $scope.user.login;
	}
}