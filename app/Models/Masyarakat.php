<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable {
    use HasFactory;

    protected $table = 'tb_masyarakat';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_lengkap', 'username', 'password', 'telp'];
    protected $hidden = ['password'];
}
