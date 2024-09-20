<?php

namespace App\Emrah\Models;

use Illuminate\Database\Eloquent\Model;

class AccountShareholder extends Model
{
    const TABLE = "accounts_shareholder";

    protected $fillable = ['id', 'name', 'email', 'phone', 'status'];
}