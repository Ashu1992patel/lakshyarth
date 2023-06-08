<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->default('logo.png');
            $table->string('company_full_name')->default("Ghunsaur Farmer Producer Company Ltd.");
            $table->string('company_short_name')->default("GFPC");
            $table->string('address')->default("Ghunsaur, Jabalpur");
            $table->string('contact_primary')->default("9144444124");
            $table->string('contact_secondary')->default("9144444124");
            $table->string('email')->default("help@lakshyarth.com");
            $table->string('footer_text')->default("Copyright 2019 All Right Reserved By Lakshyarth Foordgrain");
            $table->string('theme')->default("1")->comment("Theme for guest user");
            $table->string('banner_image')->default("images/banner.jpg");
            $table->string('box_image_1')->default("frontend/images/img1.jpg");
            $table->string('box_image_2')->default("frontend/images/img2.jpg");
            $table->string('box_image_3')->default("frontend/images/img3.jpg");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
