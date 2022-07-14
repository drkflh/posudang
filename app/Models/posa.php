<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posa extends Model
{
    use HasFactory;
    protected $table = 'posas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'jmlh_putih', 'jmlh_merah', 'jmlh_tiger'
    ];
}
