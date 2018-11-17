<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['judul', 'pengarang', 'penerbit',  'tahun_terbit', 'jumlah_buku', 'deskripsi', 'cover'];

}
