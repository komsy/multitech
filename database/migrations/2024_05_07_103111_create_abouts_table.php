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
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->string('aboutHeading1',100);
            $table->string('aboutHeading2',150);
            $table->longText('aboutDescription');
            $table->string('aboutText1',150);
            $table->string('aboutText2',150);
            $table->string('aboutIcon1');
            $table->string('aboutIcon2');
            $table->string('aboutPoint1',150);
            $table->string('aboutPoint2',150);
            $table->string('aboutPoint3',150);
            $table->string('aboutPoint4',150);
            $table->string('aboutImage1');
            $table->string('aboutImage2');
            $table->string('aboutImage3');
            $table->string('aboutImage4');
            $table->tinyInteger('aboutStatus')->comment('0 for Inactive & 1 for Active')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
