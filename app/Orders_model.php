<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders_model extends Model
{
    protected $table='orders';
    protected $primaryKey='id';
    protected $fillable=['users_id',
        'users_email','name','address','city','region','province','postal_code','barangay','country','phone_number','delivery_cost',
        'order_status','payment_method','grand_total', 'products_id'];
}
