<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KLPD extends Model
{
    protected $table = 'klpd';
    protected $fillable = ['name'];
    public $timestamps = false;
}
