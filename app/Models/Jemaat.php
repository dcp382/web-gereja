<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    protected $table = "jemaat";

    protected $fillable =['nama','alamat','jenis_kelamin','tempat_lahir','tanggal_lahir','no_telepon','alamat_email'];

    public function cool()
    {
        return $this->hasOne('App\Models\Cool');
    }

    public function cool1()
    {
        return $this->belongsTo('App\Models\Cool','id_cool');
    }
}
