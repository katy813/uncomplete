<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     protected $fillable = [
            'name','description','state','price','charityfee','status','category','itemimage','seller_id','buyer_id'
        ];
        public function seller()
        {
             return $this->belongsTo('App\User','seller_id');
        }

}
