<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_id',
        'user_id',
        'service_id',
        'instructor_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'status',
        'amount',
        'snap_token'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function service() {
        return $this->belongsTo(Service::class)->withDefault();
    }

    public function instructor() {
        return $this->belongsTo(Instructor::class)->withDefault();
    }
}
