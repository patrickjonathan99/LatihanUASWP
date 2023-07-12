<?php

namespace App;

use App\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataKuliah extends Model
{
    use HasFactory;

    public function mahasiswa() {
        return $this->hasMany(Mahasiswa::class);
    }
}
