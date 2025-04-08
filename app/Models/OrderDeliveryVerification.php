<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 *
 * @property int $id Primary
 * @property int $order_id
 * @property string $image
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class OrderDeliveryVerification extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'image' => 'string',
        'created_at' => 'datetime',
<<<<<<< HEAD
        'updated_at' => 'datetime',
=======
        'updated_at' => 'time',
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    ];

    protected $fillable = [
        'order_id',
        'image',
    ];

}
