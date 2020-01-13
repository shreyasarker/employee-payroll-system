<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['role_id', 'name', 'email', 'contact', 'address'];

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
