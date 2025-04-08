<?php

namespace App\Services;

class PasswordResetService
{
<<<<<<< HEAD
    public function getAddData(string|int $identity, string $token,string $userType):array
    {
        return [
            'identity' => $identity,
=======
    public function getAddData(object $vendor, string $token,string $userType):array
    {
        return [
            'identity' => $vendor['email'],
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            'token' => $token,
            'user_type'=>$userType,
            'created_at' => now(),
        ];
    }
}
