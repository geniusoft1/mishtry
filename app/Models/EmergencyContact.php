<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserProfile
 *
 * @property int $id Primary
 * @property int $user_id
 * @property string $name
<<<<<<< HEAD
 * @property string $country_code
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
 * @property string $phone
 * @property bool $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class EmergencyContact extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'status' => 'boolean',
<<<<<<< HEAD
        'country_code' => 'string',
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $fillable = [
        'user_id',
        'name',
<<<<<<< HEAD
        'country_code',
=======
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
        'phone',
        'status',
        'created_at',
        'updated_at',
    ];

}
