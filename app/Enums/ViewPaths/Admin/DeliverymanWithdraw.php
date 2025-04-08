<?php

namespace App\Enums\ViewPaths\Admin;

enum DeliverymanWithdraw
{

    const LIST = [
        URI => 'withdraw-list',
<<<<<<< HEAD
        VIEW => 'admin-views.delivery-man.withdraw.index',
        TABLE_VIEW=> 'admin-views.delivery-man.withdraw._table',
=======
        VIEW => 'admin-views.delivery-man.withdraw.withdraw_list'
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    ];

    const EXPORT_LIST = [
        URI => 'withdraw-list-export',
        VIEW => ''
    ];

    const VIEW = [
        URI => 'withdraw-view',
<<<<<<< HEAD
        VIEW => 'admin-views.delivery-man.withdraw._details'
    ];

    const UPDATE = [
        URI => 'withdraw-update-status',
=======
        VIEW => 'admin-views.delivery-man.withdraw.withdraw-view'
    ];

    const UPDATE = [
        URI => 'withdraw-status',
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        VIEW => ''
    ];

}
