<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msc_treatment_lists', function (Blueprint $table) {
            $table->id('msc_treatment_list_id');
            $table->unsignedBigInteger('customer_list_id');
            $table->foreign('customer_list_id')->references('customer_list_id')->on('customer_lists')->onDelete('cascade');
            $table->string('msc_treatment_list_no');
            $table->date('msc_treatment_list_data');
            $table->time('msc_treatment_list_time');
            $table->decimal('msc_treatment_list_cells', 18, 2)->default(0);
            $table->decimal('msc_treatment_list_volume', 18, 2)->default(0);
            $table->string('msc_treatment_list_comment')->nullable();
            $table->string('msc_treatment_list_processing')->nullable();
            $table->string('msc_treatment_list_observe')->nullable();
            $table->string('lot_msc_cells')->nullable();
            $table->string('number_msc_cells')->nullable();
            $table->string('quantity_msc_cells')->nullable();
            $table->string('matherial_no')->nullable();
            $table->string('baateria_culture')->nullable();
            $table->string('fungus_culture')->nullable();
            $table->string('endotoxin')->nullable();
            $table->boolean('msc_treatment_list_flag')->default(true); 
            $table->string('person_at');
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
        Schema::dropIfExists('msc_treatment_lists');
    }
};
