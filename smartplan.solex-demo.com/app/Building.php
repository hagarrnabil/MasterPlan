<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'building';
    protected $primaryKey = 'buildingCode';
    protected $fillable = ['buildingCode'];
    
    // public function units()
    // {
    //     return $this->hasMany('App\Unit', 'buildingCode');
    // }

    // public function project()
    // {
    //     return $this->belongsTo('App\Project','projectCode');
    // }
}
