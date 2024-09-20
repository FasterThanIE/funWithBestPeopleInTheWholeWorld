<?php

use App\Emrah\Models\Account;
use App\Emrah\Models\Transaction;
use App\Emrah\Models\User;
use Illuminate\Database\Schema\Blueprint;

$schema->create(table: Transaction::TABLE, callback: function(Blueprint $table) {

    $table->id();
    $table->string(column: 'status');
    $table->unsignedBigInteger('from_account');
    $table->unsignedBigInteger('to_account');
    $table->timestamps();

    $table->foreign('from_account')->references('id')->on(Account::TABLE);
    $table->foreign('to_account')->references('id')->on(Account::TABLE);
});