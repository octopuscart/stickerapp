/* 
 Producrt list controllers
 */
App.directive('fileModel', ['$parse', function ($parse) {
        return {
            restrict: 'A',
            link: function (scope, element, attrs) {
                var model = $parse(attrs.fileModel);
                var modelSetter = model.assign;

                element.bind('change', function () {
                    scope.$apply(function () {
                        console.dir(element[0].files[0])
                        modelSetter(scope, element[0].files[0]);
                    });
                });
            }
        };
    }]);
App.controller('AdminController', function ($scope, $http, $timeout, $interval) {


})


App.controller('ServiceController', function ($scope, $http, $timeout, $interval) {
    var serviceurl = baseurl + "Api/servicesAdmin";
    $scope.initData = {"resultData": [], "selected": {}};
    $http.get(serviceurl).then(function (rdata) {
        $scope.initData.resultData = rdata.data;
    })

    $scope.editService = function (serviceobj) {
        $scope.initData.selected = serviceobj
    }

})
