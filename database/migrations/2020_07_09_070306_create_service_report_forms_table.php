<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceReportFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_report_forms', function (Blueprint $table) {
            $table->id();
            $table->string('sreport_form_unique_id');
            $table->date('sreport_date')->nullable();
            $table->string('sreport_company_name')->nullable();
            $table->string('sreport_contact_person')->nullable();
            $table->string('sreport_address')->nullable();
            $table->string('sreport_support_type')->nullable();
            $table->string('sreport_instruction_from')->nullable();
            $table->string('sreport_call_received')->nullable();
            $table->string('system_down')->nullable();
            $table->string('equipment_type')->nullable();
            $table->string('call_report')->nullable();
            $table->date('call_report_date')->nullable();
            $table->time('call_report_time')->nullable();
            $table->longText('problems_report_date')->nullable();
            $table->longText('sd_service_rendered')->nullable();
            $table->string('sd_equipment')->nullable();
            $table->string('sd_brand')->nullable();
            $table->string('sd_serial_num')->nullable();
            $table->integer('sd_quantity')->nullable();
            $table->string('sd_inspected')->nullable();
            $table->string('sd_serviced')->nullable();
            $table->string('sd_installed')->nullable();
            $table->string('sd_eng_remarks')->nullable();
            $table->text('sd_status_service')->nullable();
            $table->date('sd_date')->nullable();
            $table->dateTime('sd_starttime_service')->nullable();
            $table->dateTime('sd_endtime_service')->nullable();
            $table->text('sd_engrname_contactinfo')->nullable();
            $table->string('sd_signature')->nullable();
            $table->string('ca_name')->nullable();
            $table->string('ca_designation')->nullable();
            $table->string('ca_ph_fax')->nullable();
            $table->string('ca_email')->unique();
            $table->string('ca_signature')->nullable();
            $table->date('ca_date')->nullable();
            $table->string('ca_place')->nullable();
            $table->time('ca_time')->nullable();
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
        Schema::dropIfExists('service_report_forms');
    }
}
