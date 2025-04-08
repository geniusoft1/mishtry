<?php

namespace App\Enums\ViewPaths\Vendor;

enum DeliveryManWithdraw
{
    const INDEX = [
        URI => 'index',
        VIEW => 'vendor-views.delivery-man.withdraw.index',
        TABLE_VIEW=>'vendor-views.delivery-man.withdraw._table'
    ];
    const DETAILS = [
        URI => 'details',
<<<<<<< HEAD
        VIEW => 'vendor-views.delivery-man.withdraw._details'
=======
        VIEW => 'vendor-views.delivery-man.withdraw.details'
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    ];
    const UPDATE_STATUS = [
        URI => 'update-status',
        VIEW => ''
    ];
    const EXPORT = [
        URI => 'export',
        VIEW => '',
        FILE_NAME => 'Delivery-Man-Withdraw-Request.xlsx'
    ];


}
