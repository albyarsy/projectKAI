<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel extends Model
{
    use HasFactory;
    protected $fillable = ['ip', 'unit', 'alamat', 'os', 'admin', 'toka'];
    protected $table = 'tabel';
    public $timestamps = false;
}
