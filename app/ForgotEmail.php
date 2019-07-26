<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForgotEmail extends Model
{
    protected $table = "forgotemail";
    protected  $primaryKey = "eid";
    
}