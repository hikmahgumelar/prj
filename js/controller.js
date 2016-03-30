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