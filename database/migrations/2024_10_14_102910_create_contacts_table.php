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
        Schema::create('contacts', function (Blueprint $table) {
            // id column
            $table->id();

            // fullname column
            $table->string('fullname');

            // email column
            $table->string('email');

            // message column
            // text - can hold unlimited characters
            // nullable means this column can be empty
            $table->text('message')->nullable();

            // created_at and updated_at
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
