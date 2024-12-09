<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['user_id', 'name', 'status', 'description'];

    public static function find($order_id)
    {
    }

    public function orderStructure()
    {
        return $this->hasOne(OrderStrukture::class, 'order_id', 'id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function delivery()
    {
        return $this->belongsToMany(Delivery::class);
    }


    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }


}
