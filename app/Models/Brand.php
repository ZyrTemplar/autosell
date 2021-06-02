<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $primaryKey='brand';
    public $incrementing=false;
    protected $keyType='string';

    public function carmodel(){
        return $this->belongsTo('App\Models\CarModel');
    }
}
