<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'projectCode';
    protected $fillable = ['projectCode'];
    // public function units()
    // {
    //     return $this->hasMany('App\Unit', 'projectCode');
    // }

    // public function buildings()
    // {
    //     return $this->hasMany('App\Building', 'projectCode');
    // }
}
