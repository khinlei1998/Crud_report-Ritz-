<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstallationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installation_forms', function (Blueprint $table) {
            $table->id();
            $table->string('icform_unique_id');
            $table->string('project_name');
            $table->date('pj_ic_date');
            $table->string('pj_icbusiness_name');
            $table->string('pj_iccontact_person');
            $table->string('pj_icemail')->unique();
            $table->string('pj_iccontact_no');
            $table->text('pj_icaddress');
            $table->string('site_name');
            $table->string('site_contact_person');
            $table->string('site_contact_no');
            $table->string('site_email')->unique()->nullable();
            $table->string('item');
            $table->text('description');
            $table->string('status');
            $table->string('site_signature_name');
            $table->date('site_signature_date');
            $table->string('ritz_signature_name');
            $table->date('ritz_signature_date');
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
        Schema::dropIfExists('installation_forms');
    }
}
