<?php

namespace App\Emrah\Models;

use Illuminate\Database\Eloquent\Model;

class AccountShareholder extends Model
{
    const TABLE = "accounts_shareholder";

    protected $fillable = ['account_id', 'user_id'];
}