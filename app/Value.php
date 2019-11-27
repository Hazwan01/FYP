<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    protected $fillable = ['sub_code','sub_name','sub_value'];

    public $timestamps = false;
}
