var gapps = angular.module("gapps", []);
gapps.config(['$httpProvider', function($httpProvider){
$httpProvider.defaults.useXDomain = true;
    delete $httpProvider.defaults.headers.common['X-Requested-With'];
}]);
              
              
gapps.controller("controller",['$scope','$http',
            function($scope, $http) {
                $http.get('http://localhost:3000/users').success (function(data){$scope.dataKaryawan = data;});
            }
        ]
);
gapps.controller('myCtrl', function ($scope, $http) {
  $scope.kirim = function () {
           // use $.param jQuery function to serialize data from JSON 
            var data = $.param({
                name: $scope.nama,
                country: $scope.negara,
                description: $scope.deskripsi
            });
        
            var config = {
                headers : {
                    'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                }
            }

            $http.post('http://localhost:3000/users', data, config)
            .success(function (data, status, headers, config) {
                $scope.PostDataResponse = data;
            })
            .error(function (data, status, header, config) {
                $scope.ResponseDetails = "Data: " + data +
                    "<hr />status: " + status +
                    "<hr />headers: " + header +
                    "<hr />config: " + config;
            })            
}
});