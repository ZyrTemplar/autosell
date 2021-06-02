<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $table='car_models';
    protected $keyType='string';
    protected $primaryKey='model';
    public $incrementing=false;

    public function brand(){
        return $this->hasOne('App\Models\Brand');
    }

    public function getModel(){
        return $this->belongsTo('App\Models\Auto');
    }
}
