<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';
    protected $primaryKey = 'unitNumber';

    // public function building()
    // {
    //     return $this->belongsTo('App\Building','buildingCode');
    // }

    // public function project()
    // {
    //     return $this->belongsTo('App\Project','projectCode');
    // }

}
