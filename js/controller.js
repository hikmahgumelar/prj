var gapps = angular.module('gapps', []);
gapps.controller("EventsController", function ($scope, $http) {
    $scope.proses = function() { 
    var tujuan = "GMR" //$scope.tujuan;
    var asal = "BD" //$scope.asal;
    var newTanggal = "20160518"  //$scope.newTanggal;

    $http.get('/api/keretaapi?origination='+ asal + '&destination='+ tujuan + '&tanggal='+ newTanggal + '&apikey=TzW9lTM0RBsm2AgnL2M3AZgCZCcwz5hx_1412403086').
    success(function (data) {
    $scope.events = data;
       $scope.class = data.class;
      
    });
    }
    });              
        

