<?php

use App\Emrah\Models\Account;
use App\Emrah\Models\User;
use Illuminate\Database\Schema\Blueprint;

$schema->create(table: Account::TABLE, callback: function(Blueprint $table) {
    $table->id();
    $table->bigInteger(column: 'amount');
    $table->string(column: 'status', length: 15);
    $table->foreignId(column: 'owner')->constrained(table: User::TABLE);
    $table->timestamps();
});