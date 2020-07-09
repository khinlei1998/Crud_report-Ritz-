<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnGoodFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_good_forms', function (Blueprint $table) {
            $table->id();
            $table->string('rg_form_unique_id');
            $table->string('rg_business_name');
            $table->string('rg_attn')->nullable();
            $table->text('rg_address')->nullable();
            $table->string('rg_ph_no')->nullable();
            $table->string('return_number')->nullable();
            $table->date('return_date');
            $table->date('sent_out_date');
            $table->string('rg_item');
            $table->text('rg_description');
            $table->integer('rg_quantity');
            $table->string('rg_issued_by_name');
            $table->date('rg_issued_by_date');
            $table->string('rg_received_in_name');
            $table->date('rg_received_in_date');
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
        Schema::dropIfExists('return_good_forms');
    }
}
