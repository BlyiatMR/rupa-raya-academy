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

            $table->date('start_date');                     // Start Date
            $table->date('end_date');                       // End Date
            $table->integer('times_of_meeting');            // Berapa kali pertemuan
            $table->integer('duration_of_meeting');         // Durasi pertemuan
            $table->string('schedule_img');                 // Jadwal dalam bentuk gambar
            $table->string('registration_link');            // Jadwal dalam bentuk gambar

            $table->string('slug');                         // Slug

            $table->string('price')->nullable();            // Price
            $table->string('last_price')->nullable();       // Discount // seperti 20% 10% etc...
            $table->string('tools')->nullable();            // Tools
            $table->string('location');                     // Lokasi menggunakan google maps
            $table->string('facility');                     // Fasilitas seperti komputer, laptop, etc...
            $table->string('benefit');                      // Benefit yang didapatkan

            $table->string('photos1')->nullable();          // Foto suasana
            $table->string('photos2')->nullable();
            $table->string('photos3')->nullable();
            $table->string('photos4')->nullable();

            $table->tinyInteger('isActive')->default('1');
            $table->text('description');                    // Description

            $table->foreignIdFor(Mentor::class);              // Id milik mentor

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
