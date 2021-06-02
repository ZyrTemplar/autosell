<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    public function model(){
        return $this->hasOne('App\Models\CarModel');
    }

    protected $fillable = [
        'brand',
        'model',
        'objem',
        'drive_unit',
        'capacity',
        'fuel',
        'transmission',
        'mileage',
        'year',
        'price',
        'engine_form',
        'speeding',
        'max_speed',
        'doors',
        'places',
        'auto_body',
        'color',
        'town',
        'description',
        'seller_id',
    ];

}
