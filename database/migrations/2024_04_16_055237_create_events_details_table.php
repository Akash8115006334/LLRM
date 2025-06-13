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
        Schema::create('events_details', function (Blueprint $table) {
            $table->id();
            $table->string("event_title");
            $table->string("image");
            $table->string("categoryId");
            $table->longText("description");
            $table->string("event_subtitle_desc");
            $table->dateTime("start");
            $table->dateTime("end");
            $table->time("start_time");
            $table->time("end_time");
            $table->string("city");
            $table->string("state");
            $table->string("country");
            $table->string("total_slot");
            $table->string("booked_slot");
            $table->string("website")->nullable();
            $table->string('status')->default('1');
            $table->timestamp('created_at')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_details');
    }
};
