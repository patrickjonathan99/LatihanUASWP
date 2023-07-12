<?php

namespace App;

use App\MataKuliah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    public function matakuliah() {
        return $this->belongsTo(MataKuliah::class);
    }
}
