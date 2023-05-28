<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRstSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rst_settlements', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->comment("Unique ID for a group of trasaction cleared together.");
            $table->string('user_id');
            $table->string('farmer_id');
            $table->string('acquirement_id');
            $table->string('weight')->default(0)->comment('How much weight to be deducted from total weight.');
            $table->string('percentage')->default(2)->comment('% of weight deduction');
            $table->string('calculated_weight')->default(0)->comment('Total weight after deduction');
            $table->string('deducted_weight')->default(0)->comment('How much weight to be deducted from total weight.');
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
        Schema::dropIfExists('rst_settlements');
    }
}
