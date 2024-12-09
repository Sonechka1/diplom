<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStrukture extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'fullName',
        'phone',
        'startPoint',
        'endPoint',
        'currentLocation',
        'weight',
        'shippingDate',
        'arrivalDate',
        'distance',
        'cost',
        'number',
        'date',
        'date_completion',
    ];

    public static function get()
    {
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }


    public function updateLocation($newLocation)
    {
        $this->currentLocation = $newLocation;
        $this->save();
    }


}
