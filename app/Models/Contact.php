<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact_messages';
    // Pastikan nama-nama kolom ini SESUAI dengan nama 'name="..."' di form HTML kamu
    protected $fillable = [
        'name',
        'email',
        'phone_number', 
        'message'
    ];
    
}