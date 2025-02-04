<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachSan extends Model
{
    protected $table = 'khachsan';
    public $timestamps = false;
    public $primaryKey = 'idKhachSan';
}
