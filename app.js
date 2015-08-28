<script type="text/javascript">
	angular.module('myApp', [])
		.controller('MainCtrl', ['$scope', '$http', function($scope, $http){
			$scope.list = [];
			var self = this;
			self.submit = function() {
			  console.log('User clicked submit with ', self.user);
				$http.post('php/salvar.php', {'nome': $scope.nome, 'email': $scope.email, 'senha': $scope.senha}).
				//console.log('User clicked submit with ', self.user);
				then(function(response) {
					console.log(response.status);
					console.log(response.msg);
				  }, function(response) {
				  	console.log(response.status);
				  	console.log(response.msg);
				  });
				/*.success(function(data, status, headers, config){
					console.log('Success '+data.status);
				})
				.error( function(data, status){
					console.log('Error '+data.status);
				});*/
			}
		//}
	}]);
</script>
