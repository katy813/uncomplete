<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charityseason extends Model
{
     protected $fillable = [
            'seasonName','description','duration','unitname','unitvalue','numofunits','seasonphoto',
        ];

public function users()
{
     return $this->belongsToMany('App\user');
}
}
