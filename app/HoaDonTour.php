<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDonTour extends Model
{
    protected $table = 'hoadontour';
    public $timestamps = false;
    public $primaryKey = 'idHoaDon';
}
