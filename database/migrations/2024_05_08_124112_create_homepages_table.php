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
        Schema::create('homepages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->string('header1',100);
            $table->string('header2',150);
            $table->string('homepageImage1');
            $table->string('homepageImage2');
            $table->string('whyChooseUsHeader1',50);
            $table->string('whyChooseUsHeader2',150);
            $table->string('serviceHeader1',50);
            $table->string('serviceHeader2',150);
            $table->string('projectHeader1',50);
            $table->string('projectHeader2',150);
            $table->string('testimonialHeader1',50);
            $table->string('testimonialHeader2',150);
            $table->tinyInteger('topbarShow')->comment('0 for Inactive & 1 for Active')->default(1);
            $table->tinyInteger('factShow')->comment('0 for Inactive & 1 for Active')->default(1);
            $table->tinyInteger('factPageShow')->comment('0 for Inactive & 1 for Active')->default(1);
            $table->tinyInteger('projectShow')->comment('0 for Inactive & 1 for Active')->default(1);
            $table->tinyInteger('whyChooseUsShow')->comment('0 for Inactive & 1 for Active')->default(1);
            $table->tinyInteger('testmonyShow')->comment('0 for Inactive & 1 for Active')->default(1);
            $table->tinyInteger('newsletterShow')->comment('0 for Inactive & 1 for Active')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
