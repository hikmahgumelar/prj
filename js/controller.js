var gapps = angular.module("gapps", []);
gapps.config(['$httpProvider', function($httpProvider){
$httpProvider.defaults.useXDomain = true;
    delete $httpProvider.defaults.headers.common['X-Requested-With'];
}]);
gapps.controller("EventsController", function ($scope, $http) {
    $scope.proses = function() { 
    var tujuan = $scope.tujuan;
    var asal = $scope.asal;
    
    $http.get('/api/keretaapi?origination='+ asal + '&destination='+ tujuan + '&tanggal=20160409&apikey=TzW9lTM0RBsm2AgnL2M3AZgCZCcwz5hx_1412403086').
    success(function (data) {
        $scope.events = data;
       $scope.class = data.class;
    });
    }
    });              
        

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