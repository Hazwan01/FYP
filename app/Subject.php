<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['sub_group','sub_name','sub_code'];

    public $timestamps = false;
}
