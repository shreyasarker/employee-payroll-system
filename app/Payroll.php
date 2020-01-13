<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payroll extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['employee_id', 'over_time', 'notified', 'hours', 'rate', 'gross'];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
