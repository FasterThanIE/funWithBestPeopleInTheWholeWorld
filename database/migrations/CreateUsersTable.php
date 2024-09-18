<?php

use App\Emrah\Models\User;
use Illuminate\Database\Schema\Blueprint;

$schema->create(table: User::TABLE, callback: function(Blueprint $table) {
    $table->string(column: 'name', length: 64);
    $table->timestamps();
});