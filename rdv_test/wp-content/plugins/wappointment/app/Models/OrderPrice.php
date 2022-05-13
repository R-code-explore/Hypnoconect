<?php

namespace Wappointment\Models;

use Wappointment\ClassConnect\Model;
class OrderPrice extends \Wappointment\ClassConnect\Model
{
    protected $table = 'wappo_order_price';
    protected $fillable = ['order_id', 'price_id', 'appointment_id', 'price_value', 'item_name', 'quantity'];
    protected $with = ['price'];
    public function price()
    {
        return $this->belongsTo(\Wappointment\Models\Price::class, 'price_id');
    }
    public function appointment()
    {
        return $this->belongsTo(\Wappointment\Models\Appointment::class, 'appointment_id');
    }
}
