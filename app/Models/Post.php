<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // cara konek db manual jika tabel berbeda nama dari model
    // protected $table = 'posts';

    // canentukan data yang boleh dimasukan ke db
    protected $fillable = ['title', 'description'];
    
}
