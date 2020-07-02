<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNocReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noc_reports', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->longText('description');
            $table->date('report_date');
            $table->string('team_members_name');
            $table->time('report_start_time');
            $table->time('report_end_time');
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
        Schema::dropIfExists('noc_reports');
    }
}
