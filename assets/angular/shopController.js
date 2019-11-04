/* 
 Shop Cart product controllers
 */
App.controller('ShopController', function ($scope, $http, $timeout, $interval, $filter) {
    $scope.userLogin = {};

    $scope.getLoginDetails2 = function () {
        var loginurl = baseurl + "Api/loginOperation"
        $http.get(loginurl).then(function (rdata) {
            let userdata = rdata.data;
            console.log(userdata)
            if (userdata) {
                $scope.userLogin = userdata
            }
        })
    }
    $scope.getLoginDetails2();


    var bookingurl = baseurl + "Api/services";
    $scope.getServicegData = function () {
        $http.get(bookingurl).then(function (returndata) {
            $scope.selectService = returndata.data;
            console.log($scope.selectService);
        })
    }
    $scope.getServicegData();

    $scope.selectedService = {};

    $scope.chooseServices = function (service) {
        console.log(service)
        if (service.checked) {
            $scope.selectedService[service.title] = "";
        } else {
            delete $scope.selectedService[service.title];
        }
        var tempservice = [];
        for (serv in $scope.selectedService) {
            tempservice.push(serv);
        }
        $scope.selectServicesText = tempservice.join(", ");
        $scope.select_table = $scope.selectServicesText;
    }




})


App.controller('ProductDetails', function ($scope, $http, $timeout, $interval, $filter) {
    $scope.productver = {'quantity': 1};
    $scope.updateCartDetail = function (oper) {
        console.log(oper)
        if (oper == 'sub') {
            if ($scope.productver.quantity == 1) {
            } else {
                $scope.productver.quantity = Number($scope.productver.quantity) - 1;
            }
        }
        if (oper == 'add') {
            if ($scope.productver.quantity > 5) {
            } else {
                $scope.productver.quantity = Number($scope.productver.quantity) + 1;
            }
        }
    }

    $(function () {
        $(".select2").on('select2:select', function (e) {
            var data = e.params.data;
            var url = baseurl + "Product/ProductDetails/" + data.id + "";
            window.location = url;
        });
    })
})