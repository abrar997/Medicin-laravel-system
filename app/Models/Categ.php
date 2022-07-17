<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categ extends Model
{
    public $table = 'categ';
    public $fillable = [
        'name', 'comapny'
    ];
    use HasFactory;
}
