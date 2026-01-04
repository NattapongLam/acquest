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
        Schema::create('customer_lists', function (Blueprint $table) {
            $table->id('customer_list_id');
            $table->string('customer_list_code');
            $table->string('customer_list_info')->nullable();
            $table->date('customer_list_date');
            $table->string('customer_list_prefix')->nullable();
            $table->string('customer_list_name');
            $table->string('customer_list_nationality')->nullable();
            $table->date('customer_list_birthdate')->nullable();
            $table->string('customer_list_age')->nullable();
            $table->decimal('customer_list_height', 18, 2)->default(0);
            $table->decimal('customer_list_weight', 18, 2)->default(0);
            $table->string('customer_list_bloodgroup')->nullable();
            $table->string('customer_list_gender')->nullable();
            $table->string('customer_list_address')->nullable();
            $table->string('customer_list_city')->nullable();
            $table->string('customer_list_country')->nullable();
            $table->string('customer_list_zipcode')->nullable();
            $table->string('customer_list_contractnumber')->nullable();
            $table->string('customer_list_email')->nullable();
            $table->string('emergencycontract_name')->nullable();
            $table->string('emergencycontract_email')->nullable();
            $table->string('emergencycontract_number')->nullable();
            $table->string('customer_list_note')->nullable();
            $table->boolean('customer_list_flag')->default(true); 
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
        Schema::dropIfExists('customer_lists');
    }
};
