<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['department_id', 'name', 'salary'];

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
