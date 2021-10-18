<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengarang extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'nama_pengarang',
        'email',
        'tlp'
    ];

    public function book()
    {
        return $this->hasMany(Book::class, 'pengarang_id');
    }
}