<?php

namespace App\Enums\ViewPaths\Admin;

enum Banner
{
    const LIST = [
        URI => 'list',
        VIEW => 'admin-views.banner.view'
    ];

    const ADD = [
        URI => 'add',
        VIEW => ''
    ];

    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];

    const STATUS = [
        URI => 'status',
        VIEW => ''
    ];

    const UPDATE = [
        URI => 'update',
<<<<<<< HEAD
        VIEW => 'admin-views.banner.edit',
        ROUTE => 'admin.banner.list'
=======
        VIEW => 'admin-views.banner.edit'
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    ];
}
