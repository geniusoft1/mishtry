<?php

namespace App\Enums\ViewPaths\Admin;

enum Contact
{

    const LIST = [
        URI => 'list',
        VIEW => 'admin-views.contacts.list'
    ];

    const VIEW = [
        URI => 'view',
        VIEW => 'admin-views.contacts.view'
    ];
<<<<<<< HEAD
    const FILTER = [
        URI => 'filer',
        VIEW => 'admin-views.contacts._table'
    ];
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017

    const UPDATE = [
        URI => 'update',
        VIEW => ''
    ];

    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];

    const ADD = [
        URI => 'store',
        VIEW => ''
    ];
    const SEND_MAIL = [
        URI => 'send-mail',
        VIEW => ''
    ];

}
