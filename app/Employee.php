<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];

    public function stocks(){
        return $this->hasMany(Stock::class);
    }
}
