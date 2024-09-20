<?php

namespace App\Emrah\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    const TABLE = "transactions";

    protected $fillable = ['status', 'from_account', 'to_account'];
}