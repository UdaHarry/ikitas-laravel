<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
     protected $table = 'tabel_about';
     protected $primaryKey = 'id';
     protected $fillable = ['headline', 'deskripsi', 'gambar'];
}
