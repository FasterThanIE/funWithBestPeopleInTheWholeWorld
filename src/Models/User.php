<?php

namespace App\Emrah\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    const string TABLE = "users";

    protected $fillable = ['id', 'name', 'email', 'phone', 'status'];
}