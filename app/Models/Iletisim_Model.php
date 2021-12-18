<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iletisim_Model extends Model
{
    use HasFactory;
    protected $table = 'iletisim';
    protected $fillable = ['adSoyad', 'email', 'konu', 'mesaj'];
}
