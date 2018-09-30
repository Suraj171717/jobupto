<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyjobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myjobs', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('jobloc_id');
			$table->integer('jobcat_id');
			$table->string('job_company');
			$table->integer('jobpost_id');
			$table->longText('job_vacancies');
			$table->integer('jobqual_id');
			$table->integer('jobexp_id');
			$table->string('lastdate');
			$table->string('advt')->nullable();
			$table->string('applynow');
            $table->string('job_status');
			$table->date('final_date')->nullable();
            $table->boolean('online_fillable')->default(false);
            $table->longText('job_description')->nullable();
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
        Schema::dropIfExists('myjobs');
    }
}
