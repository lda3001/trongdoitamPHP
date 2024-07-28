<?php
include "includes/header.php";


?>
<div class="breadcrumb">
    <div class="container">
        <ol itemscope="" itemprop="breadcrumb" itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="/"><i class="fa fa-home" aria-hidden="true"></i>
                    <span itemprop="name">Trang chủ</span></a>
                <meta itemprop="position" content="1">
            </li>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="">
                    <span itemprop="name">Giỏ h&#224;ng</span></a>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
</div>


<div class="container">





















    <style>
        .ng-cloak {
            display: none;
        }

        .btnChangeQuantity {
            padding: 3px;
            background-color: #ddd;
            border-radius: 0;
        }

        .btnChangeQuantity .fa {
            /*font-weight:normal;*/
            font-size: 14px;
            color: #808080
        }
    </style>
    <div id="border-radius-1-padding-1">
        <div id="bd-panel" ng-app="App">
            <div class="boxbody_tbl box-home ng-cloak mt-0" ng-controller="ListCart">
                <div class="boxbody_top">
                    <span>
                        <h1 class="uppercase">Giỏ h&#224;ng</h1>
                    </span>
                </div>
                <div class="boxbody_body">
                    <div class="row" ng-cloak ng-if="todos.length>0">
                        <div class="col-lg-8 p-0 pr-0 pr-lg-4">
                            <table class="table bg-white cart-table">
                                <tbody>
                                    <tr>
                                        <td align="center" width="15%" class="px-0"><b>Image</b></td>
                                        <td class="px-0">
                                            <div class="form-row font-weight-bold">
                                                <div class="col-md-5 text-left">Sản phẩm</div>
                                                <div class="col-md-2 text-right">Gi&#225; b&#225;n (đ)</div>
                                                <div class="col-md-3 text-center">Số lượng</div>
                                                <div class="col-md-2 text-right">Th&#224;nh tiền (đ)</div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr ng-repeat="item in todos">
                                        <td class="tdproduct" width="15%">
                                            <a ng-href="{{item.alias}}"><img ng-src="{{item.image}}" /></a>
                                        </td>
                                        <td class="tdproduct">
                                            <div class="form-row">
                                                <div class="col-md-5 col-12 text-left">
                                                    <a ng-href="{{item.alias}}">{{item.productname}}</a>
                                                    <p><i ng-bind="item.optionname"></i></p>
                                                    <span class="d-block" ng-bind="item.attribute"></span>
                                                    <span role="button" ng-click="remove(item)" class="text-danger h5"
                                                        title="Xóa/Remove"><i class="fa fa-trash"></i></span>
                                                </div>
                                                <div class="col-md-2 col-4 text-md-right">{{item.price|currency
                                                    :"":0}}</div>
                                                <div class="col-md-3 col-4 text-center">
                                                    <table class="m-auto">
                                                        <tr>
                                                            <td class="p-0 border-0"><button
                                                                    class="btn btnChangeQuantity" ng-click="minus(item)"
                                                                    style="width:24px;height:26px"><i
                                                                        class="fa fa-minus"></i></button></td>
                                                            <td class="p-0 border-0"><input type="number"
                                                                    ng-change="update(item)"
                                                                    class="txtQuantity text-center p-0" name="soluong1"
                                                                    ng-model="item.quantity"
                                                                    style="width:30px;height:26px" /></td>
                                                            <td class="p-0 border-0"><button
                                                                    class="btn btnChangeQuantity" ng-click="plus(item)"
                                                                    style="width:24px;height:26px"><i
                                                                        class="fa fa-plus"></i></button></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-2 col-4 text-right">
                                                    {{item.quantity*item.price|currency :"":0}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="trTotal1 bg-white" align="right">
                                        <td colspan="2" class="px-0">
                                            <div class="form-row">
                                                <div class="col-md-10 col-9"><b>Tiền hàng:</b></div>
                                                <div class="col-md-2 col-3"><b>{{getTotal()|currency :"":0}}</b>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a id="btnContinue" href="/" class="button btn button-noicon ico float-right mb-3"><i
                                    class="fas fa-arrow-circle-right"></i> Tiếp tục mua h&#224;ng</a>
                        </div>
                        <div class="col-lg-4 p-0 pl-0 pl-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <b>Tổng:</b>
                                    <b class="float-right"><span class="text-right text-danger">{{getTotal()|currency
                                            :"":0}}
                                            đ</span></b>
                                    <p class="mb-0">Voucher:</p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="codeVoucher"
                                            placeholder="Voucher code" ng-model="voucher" />
                                        <div class="input-group-append">
                                            <button type="button" class="btn button m-0 py-0 px-3"
                                                ng-click="checkVoucher()" id="btnSMVoucher">&#193;p
                                                dụng</button>
                                        </div>
                                    </div>
                                    <div id="voucherValue">
                                        <p ng-if="vrate.length>0"> <b class="float-right text-right text-danger"
                                                ng-bind="vrate"></b></p>
                                    </div>
                                    <div class="clear"></div>
                                    <b>Tổng tiền:</b>
                                    <b class="float-right"><span class="text-right text-danger"
                                            id="voucherCal">{{getTotal()+vprice|currency :"":0}} đ</span></b>
                                </div>
                            </div>
                            <a href="/thong-tin-van-chuyen.html" class="btn button btn-block" ng-click="payment()">Thanh
                                to&#225;n</a>
                        </div>
                    </div>
                    <p align="center" ng-cloak ng-if="todos.length==0&&loading==false">
                        <font style="font-size: 14px;"><b>Giỏ h&#227;ng rỗng</b></font>
                    </p>
                    <p align="center" ng-cloak ng-if="todos.length==0&&loading==true">
                        <i class="fa fa-spin fa-spinner fa-3x"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<script src="assets/js/angular.min.js"></script>
<script>
        var App = angular.module('App', []);
        App.controller('ListCart', function ($scope, $http, $interval, $locale) {
            $locale.NUMBER_FORMATS.GROUP_SEP = '.';
            $scope.voucher = "";
            $scope.vrate = "";
            $scope.vprice = 0;
            $scope.todos = [];
            $scope.formData = {};
            $scope.loading = false;
            $scope.loadData = function () {
                $scope.loading = true;
                $http.post('/Cart/Json')
                    .then(function (res) {
                       
                        $scope.loading = false;
                        $scope.todos = res.data;
                    });
            }
            $scope.getTotal = function () {
                var total = 0;
                for (var i = 0; i < $scope.todos.length; i++) {
                    var product = $scope.todos[i];
                    total += (product.price * product.quantity);
                }
                return total;
            }
            $scope.minus = function (item) {
                if (item.quantity > 1) {
                    item.quantity--;
                    $scope.update(item);
                }

            }
            $scope.plus = function (item) {
                item.quantity++;
                $scope.update(item);
            }
            $scope.update = function (todo) {
                $http.post('/Cart/Update', todo)
                    .then(function (res) {
                        if ($scope.voucher != "")
                            $scope.checkVoucher();
                        //$scope.loadData();
                    });
            };
            $scope.checkVoucher = function () {
                //alert(this.voucher);
                $http.post('/Cart/CheckVoucher', { voucher: this.voucher })
                    .then(function (res) {
                        if (res.data.status == false) {
                            alert(res.data.alert);
                            $scope.vrate = "";
                            $scope.voucher = "";
                            $scope.loadData();
                            $scope.vprice = 0;
                        }
                        else {
                            $scope.vrate = res.data.value;
                            $scope.vprice = res.data.vprice;
                        }
                    });
            }
            if ($scope.voucher != "")
                $scope.checkVoucher();
            $scope.remove = function (todo) {
                var x = confirm("Bạn có chắc muốn xoá?");
                if (!x) return false;
                $http.post('/Cart/Delete', todo)
                    .then(function (res) {
                       
                        $("#countCart").html(res.data);
                        $scope.loadData();
                        if ($scope.voucher != "")
                            $scope.checkVoucher();
                    });
            }
            $scope.payment = function () {
                if ($scope.todos.length > 0)
                    window.location.href = "/thong-tin-van-chuyen.html";
            }
            $scope.loadData();
        });
    </script>