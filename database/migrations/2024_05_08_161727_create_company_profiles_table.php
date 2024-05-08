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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->string('companyName',150);
            $table->string('companyLogo');
            $table->string('companyEmail',50);
            $table->string('salesEmail',50)->nullable();
            $table->string('phoneNumber',20);
            $table->string('salesNumber',20)->nullable();
            $table->string('location1');
            $table->string('location2')->nullable();
            $table->string('facebookProfile')->nullable();
            $table->string('instagramProfile')->nullable();
            $table->string('twitterProfile')->nullable();
            $table->string('youtubeProfile')->nullable();
            $table->string('linkedinProfile')->nullable();
            $table->string('tiktokProfile')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
