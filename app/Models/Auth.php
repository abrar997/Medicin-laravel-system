<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    protected  $table = 'users';
    public $fillable = [
        'name',
        'age',
        'phone',
        'location'
    ];
    use HasFactory;
}
