<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = [];

    public function mobiles()
    {
        return $this->hasMany(Mobile::class);
    }
}
