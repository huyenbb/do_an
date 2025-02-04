<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    protected $table = 'baiviet';
    public $timestamps = false;
    public $primaryKey = 'idBaiViet';
}
