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
        Schema::create('home_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('path_image')->nullable();
            $table->string('path_video')->nullable();
            $table->string('url_click')->nullable();
            $table->string('type')->default('image','video');
            $table->string('posisi')->default('slider','banner','Higlight','video-list');
            $table->UnsignedInteger('created_by');
            $table->UnsignedInteger('updated_by');
            $table->timestamp('publish_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_settings');
    }
};
