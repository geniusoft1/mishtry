<?php

namespace App\Enums\ViewPaths\Admin;

enum SubSubCategory
{
    const LIST = [
        URI => 'view',
        VIEW => 'admin-views.category.sub-sub-category-view'
    ];

    const ADD = [
        URI => 'store',
        VIEW => ''
    ];

    const UPDATE = [
        URI => 'update',
        VIEW => 'admin-views.category.category-edit'
    ];

    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];

    const GET_SUB_CATEGORY = [
        URI => 'get-sub-category',
        VIEW => ''
    ];
<<<<<<< HEAD
    const EXPORT = [
        URI => 'export',
        VIEW => ''
    ];
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
}
