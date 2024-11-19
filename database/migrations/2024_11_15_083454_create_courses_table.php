<?php

use App\Models\Mentor;
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
        Schema::create('courses', function (Blueprint $table) {
            
            $table->id();
            $table->string('title');                        // Title
            $table->string('banner_img');                   // Banner Image 
            $table->string('type');                         // Online or Offline
            $table->date('start_date');                     // Start Date
            $table->integer('times_of_meeting');            // Start Date
            $table->integer('duration_of_meeting');         // Start Date
            $table->string('slug');                         // Slug
            $table->string('price')->nullable();            // Price
            $table->string('last_price')->nullable();       // Discount // seperti 20% 10% etc...
            $table->string('tools')->nullable();            // Tools
            $table->string('location');                     // Lokasi menggunakan google maps
            $table->string('facility');                     // Fasilitas seperti komputer, laptop, etc...
            $table->string('benefit');                      // Lokasi menggunakan google maps
            $table->string('suitable_person')->nullable();  // Orang yang cocok untuk class ini
            $table->text('description');                    // Description
            
            $table->foreignIdFor(Mentor::class);              // Id milik mentor

            // $table->string('mentor_name'); // Lokasi menggunakan google maps
            // $table->string('mentor_profile'); // Lokasi menggunakan google maps
            // $table->string('mentor_job'); // Lokasi menggunakan google maps


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
