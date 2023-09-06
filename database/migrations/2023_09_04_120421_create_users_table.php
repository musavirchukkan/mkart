<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('username')->unique();
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('phone', 12);
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->boolean('status')->comment('1:Active,0:Inactive')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
