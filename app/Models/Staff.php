<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $fillable = [
        'nik', 
        'nama', 
        'email',
        'alamat',
        'no_hp',
    ];
}
