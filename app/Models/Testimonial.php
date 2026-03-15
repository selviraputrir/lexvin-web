<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    // Pastikan baris ini ada supaya bisa nyimpen data
    protected $fillable = ['nama', 'jabatan', 'pesan', 'foto'];
}