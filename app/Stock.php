<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['territory', 'mobile_id', 'employee_id', 'location_id', 'stock_date'];

    public function mobile()
    {
        return $this->belongsTo(Mobile::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
