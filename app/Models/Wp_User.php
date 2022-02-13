<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wp_User extends Model
{
    use HasFactory;

    
    protected $guarded = [];
    public $timestamps = false;
    protected $connection = 'wp_db';
    protected $table = 'wp_users';
}
