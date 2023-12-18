<?php

use App\Enums\DomainStatus;
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
        Schema::create('domains', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('domain', 255)->unique();
            $table->string('label', 255)->nullable();
            $table->integer('total_account')->default(0);
            $table->integer('total_aliases')->default(0);
            $table->integer('total_group')->default(0);
            $table->enum('status', [
                DomainStatus::ACTIVE, 
                DomainStatus::NEED_CONFIGURE
            ])->default(DomainStatus::NEED_CONFIGURE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
