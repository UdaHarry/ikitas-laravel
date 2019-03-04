<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bawah extends Model
{
     protected $table = 'tabel_bawah';
     protected $primaryKey = 'id';
     protected $fillable = ['maps', 'email', 'telepon','hp','whatsapp'];
}
