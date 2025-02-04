<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    protected $table = 'diadiem';
    public $timestamps = false;
    public $primaryKey = 'idDiaDiem';
}
