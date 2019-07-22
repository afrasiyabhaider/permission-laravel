<?php

namespace Laravel_Practice;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $primarykey = 'id';
    protected $timestamps = true;
}