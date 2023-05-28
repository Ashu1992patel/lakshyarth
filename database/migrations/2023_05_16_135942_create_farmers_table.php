<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string("kisan_id")->nullable()->comment("This id will be shared among all the farmers.");
            $table->string("name");
            $table->string("primary_contact")->nullable();
            $table->string("secondary_contact")->nullable();
            $table->string("village")->nullable();
            $table->string("gender")->nullable();
            $table->string("comment")->nullable();
            $table->string("photo")->comment('Kisan picture will be uploaded')->nullable();
            $table->string("aadhaar_card")->comment('Aadhaar card shoudl be uploaded')->nullable();
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
        Schema::dropIfExists('farmers');
    }
}
