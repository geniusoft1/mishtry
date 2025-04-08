<?php

namespace App\Services;

class EmergencyContactService
{
    /**
     * @return array[user_id: int|string, name: mixed, phone: mixed]
     */
    public function getEmergencyContactData(object $request , string|int $id):array
    {
        return [
            'user_id' => $id,
<<<<<<< HEAD
            'country_code' => $request['country_code'],
            'name' => $request['name'],
            'phone' => $request['phone'],
            'status' => 1,
=======
            'name' => $request['name'],
            'phone' => $request['phone'],
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        ];
    }
}
