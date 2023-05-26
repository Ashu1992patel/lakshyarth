<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcquirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acquirements', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable()->comment('RST registered by logged in user');
            $table->string('farmer_id')->comment('Farmers id will come from farmers table - foriegn key');
            $table->string('vehicle_type')->nullable()->comment('Like Tractor, Bike, Magic, Auto, 407, Truck, Bus etc.');
            $table->string('vehicle_number')->nullable()->comment('e.g. MP20-NJ-2361');
            $table->string("rst")->unique()->comment('RST will be unique in this table');
            $table->string("rst_file")->nullable()->comment('RST image will be unique in this table');
            $table->string('weight')->nullable();
            $table->boolean('is_cleared')->default(0);
            $table->boolean('is_approved')->default(0);
            $table->string('comment', 1024)->nullable();
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
        Schema::dropIfExists('acquirements');
    }
}
