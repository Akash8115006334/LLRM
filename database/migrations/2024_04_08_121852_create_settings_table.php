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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('websiteName');
            $table->text('websiteTagline');
            $table->string('websiteLink');
            $table->string('websiteLogo');
            $table->string('websitePrimaryPhoneNo')->nullable();
            $table->string('websiteAlternatePhoneNo')->nullable();
            $table->string('websiteAdditionalPhoneNo')->nullable();
            $table->string('websitePrimaryEmailId');
            $table->string('websiteAlternateEmailId')->nullable();
            $table->string('websiteAdditionalEmailId')->nullable();
            $table->text('websiteAddress');
            $table->text('websiteMapUrl')->nullable();
            $table->text('websiteCopyRightArea')->nullable();
            $table->integer('status')->default('1');
            $table->timestamp('created_at')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
