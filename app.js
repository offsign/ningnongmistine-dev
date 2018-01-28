var myApp = angular.module('myApp',[])

myApp.controller('myAppController', ['$scope', function( $scope ){
    
    $scope.device = {}
    $scope.getBtnText = 'GET';
    $scope.tab = 'details';
    detectmob();
    angular.element(document).ready(function(){
        
        $(document).ready(function() {
            $("#carousel").owlCarousel({
                margin: 30,
                items: 1,
                responsive: false,
                stagePadding: 70
            });
        });
    })
    
    $scope.clickGet = function(){
        
        if( $scope.getBtnText == 'GET' ) {
            $scope.getBtnText = 'INSTALL';
        }
        
        else if( $scope.getBtnText == 'INSTALL' ) {
            window.location.href='itms-services://?action=download-manifest&url=https://ningnong-development.herokuapp.com/install.plist';
        }
    }
    $scope.clickCatcher = function() {
        $scope.getBtnText = 'GET';
    }
    
    
    function detectmob() { 
        if( navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) ){
            $scope.device.support = true;
        }
        else {
//            $scope.device.support = false;
            $scope.device.support = true;
        }
}
}])