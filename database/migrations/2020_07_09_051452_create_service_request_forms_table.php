<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_request_forms', function (Blueprint $table) {
            $table->id();
            $table->string('sr_form_unique_id');
            $table->string('sr_company_name')->nullable();
            $table->string('sr_department_name')->nullable();
            $table->string('sr_branch_name')->nullable();
            $table->string('sr_customer_name');
            $table->string('sr_email')->unique();
            $table->date('sr_date')->nullable();
            $table->string('problem_caegory');
            $table->longText('problem_details')->nullable();
            $table->longText('ritz_eng_remarks')->nullable();
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
        Schema::dropIfExists('service_request_forms');
    }
}
