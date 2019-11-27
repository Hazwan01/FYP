<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sumvalue extends Model
{
    protected $fillable = ['sub_sum_code','sub_sum_name','sub_sum_value'];

    public $timestamps = false;
}
