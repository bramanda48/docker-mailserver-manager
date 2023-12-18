<?php

use App\Enums\AccountStatus;
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
        Schema::create('accounts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('domain_id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('username', 255)->unique();
            $table->string('password_hash', 30); //SHA256-CRYPT SHA512-CRYPT BCRYPT SCRYPT YESCRYPT ARGON2
            $table->enum('status', [
                AccountStatus::ACTIVE,
                AccountStatus::SUSPENDED
            ])->default(AccountStatus::SUSPENDED);
            $table->timestamps();

            // Add foreign key
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
