<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodDeliveryFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_delivery_forms', function (Blueprint $table) {
            $table->id();
            $table->string('gd_form_unique_id');
            $table->string('gd_business_name');
            $table->string('gd_attn')->nullable();
            $table->text('gd_address')->nullable();
            $table->string('gd_ph_no')->nullable();
            $table->string('delivery_number')->nullable();
            $table->date('delivery_date');
            $table->string('gd_item');
            $table->text('gd_description');
            $table->integer('gd_quantity');
            $table->string('gd_issued_by_name');
            $table->date('gd_issued_by_date');
            $table->string('gd_received_in_name');
            $table->date('gd_received_in_date');
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
        Schema::dropIfExists('good_delivery_forms');
    }
}
