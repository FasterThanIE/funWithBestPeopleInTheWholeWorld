<?php

use App\Emrah\Models\Account;
use App\Emrah\Models\AccountShareholder;
use App\Emrah\Models\User;
use Illuminate\Database\Schema\Blueprint;

$schema->create(table: AccountShareholder::TABLE, callback: function(Blueprint $table) {
    $table->id();
    $table->foreignId(column: 'account_id')->constrained(table: Account::TABLE);
    $table->foreignId(column: 'user_id')->constrained(table: User::TABLE);
    $table->timestamps();
});
