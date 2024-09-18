<?php

use App\Emrah\Models\User;
use Illuminate\Database\Schema\Blueprint;

$schema->create(table: User::TABLE, callback: function(Blueprint $table) {
    $table->id();
    $table->string(column: 'name', length: 64);
    $table->string(column: 'email',length: 190)->unique();
    $table->string(column: 'phone', length: 64);
    $table->string(column: 'status', length: 15);
    $table->timestamps();
});