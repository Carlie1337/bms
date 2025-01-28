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
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthday');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('primary_phone_number');
            $table->string('secondary_phone_number')->nullable();
            $table->string('purok')->nullable(); // Only for residents
            $table->unsignedBigInteger('barangay_id')->nullable(); // Only for residents
            $table->string('religion');
            $table->text('other_details')->nullable(); // Only for residents
            $table->date('start_resident')->nullable(); // Only for residents
            $table->string('occupation');
            $table->string('country_of_origin')->nullable(); // Only for tourists
            $table->date('arrival_date')->nullable(); // Only for tourists
            $table->string('reason_to_visit')->nullable(); // Only for tourists
            $table->enum('role', ['super_admin', 'admin', 'resident', 'tourist'])->default('resident');
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};