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
        Schema::create('nk_treatment_lists', function (Blueprint $table) {
            $table->id('nk_treatment_list_id');
            $table->unsignedBigInteger('customer_list_id');
            $table->foreign('customer_list_id')->references('customer_list_id')->on('customer_lists')->onDelete('cascade');
            $table->string('nk_treatment_list_no');
            $table->string('nk_treatment_list_note');
            $table->date('nk_treatment_list_date');
            $table->string('nk_treatment_list_batchcode');
            $table->string('health_condition')->nullable();
            $table->string('typsofnk')->nullable();
            $table->string('timeofculturedays')->nullable();
            $table->date('dateofbloodcollection')->nullable();
            $table->date('dateofstartcellculture')->nullable();
            $table->date('dateofdelivery_treatment')->nullable();
            $table->string('nk_treatment_list_processing')->nullable();
            $table->string('nk_treatment_list_observe')->nullable();
            $table->string('doctorandnursefortreatment')->nullable();
            $table->string('adverseeffects')->nullable();
            $table->string('note_comment')->nullable();
            $table->boolean('nk_treatment_list_flag')->default(true); 
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
        Schema::dropIfExists('nk_treatment_lists');
    }
};
