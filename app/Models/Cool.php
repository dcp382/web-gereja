<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cool extends Model
{
    protected $table = "cool";

    protected $fillable = ['nama','id_jemaat','hari','jenis'];

    public function jemaat()
    {
        return $this->belongsTo('App\Models\Jemaat','id_jemaat');
    }

    public function jemaat1()
    {
        return $this->hasMany('App\Models\jemaat');
    }
}
