<?php

namespace App\Enums\ViewPaths\Admin;

enum PaymentMethod
{
    const LIST = [
        URI => '/',
        VIEW => 'admin-views.business-settings.payment-method.index'
    ];
<<<<<<< HEAD
    const PAYMENT_OPTION = [
        URI => 'payment-option',
        VIEW => 'admin-views.business-settings.payment-method.payment-option'
    ];
=======

>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    const UPDATE = [
        URI => '/',
        VIEW => ''
    ];

    const UPDATE_CONFIG = [
        URI => 'addon-payment-set',
        VIEW => ''
    ];
}
