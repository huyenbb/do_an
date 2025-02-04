<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinNhan extends Model
{
    protected $table = 'tin_nhan';
    public $timestamps = false;
    public $primaryKey = 'id_tin_nhan';
}
