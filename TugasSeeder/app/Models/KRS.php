<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KRS extends Model
{
    protected $table = 'krs';
    protected $primaryKey = 'id';
    protected $fillable = ['npm', 'kode_matakuliah'];
}
