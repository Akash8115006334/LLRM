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
        Schema::create('courses_details', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("image");
            $table->longText("description");
            $table->string("event_subtitle_desc");
            $table->string("modes_of_study");
            $table->string("duration");
            $table->string("academic_direction");
            $table->string("method");
            $table->string("campus");
            $table->string("total_sheet");
            $table->string("booked_sheet");
            $table->string("seats_avilable");
            $table->string("semester_start_date");
            $table->string("Course_total_fee");
            $table->string("first_year_fee");
            $table->string("language");
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
        Schema::dropIfExists('courses_details');
    }
};
