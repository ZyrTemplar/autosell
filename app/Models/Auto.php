<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Auto
 * @package App\Models
 * @mixin Builder
 */

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
        'oblast',
        'description',
        'seller_id',
        'photo1',
        'photo2',
        'photo3',
        'photo4',
        'photo5',
        'photo6',
        'photo7',
        'photo8',
        'photo9',
        'photo10',
    ];

}
