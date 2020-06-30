<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compare_model extends Model
{
    protected $table='compare';
    protected $primaryKey='id';
    protected $fillable=['products_id', 'products_code', 'products_name', 'products_categories_id', 'products_price','products_description','session_id'];
}
