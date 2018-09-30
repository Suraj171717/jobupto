<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userforms', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			
			$table->text('name_title')->nullable();
			$table->text('first_name')->nullable();
			$table->text('middle_name')->nullable();
			$table->text('last_name')->nullable();
			$table->text('father_name')->nullable();
			$table->text('mother_name')->nullable();
			$table->text('name_ssc')->nullable();
			$table->text('gender')->nullable();
			$table->text('marital_status')->nullable();
			$table->text('spouse_name')->nullable();

			$table->text('height')->nullable();
			$table->text('weight')->nullable();
			$table->text('visibility_mark')->nullable();
			$table->text('email')->nullable();
			$table->text('mob_1')->nullable();
			$table->text('mob_2')->nullable();
			$table->text('aadhar_no')->nullable();

			$table->text('user_dob')->nullable();
			$table->text('nationality')->nullable();
			$table->text('nationality_other')->nullable();
			$table->text('religion')->nullable();
			$table->text('religion_minority')->nullable();
			$table->text('earthquake_affected')->nullable();
			$table->text('pwd')->nullable();
			
			$table->text('ex_servicemen')->nullable();
			$table->text('exsm_doj')->nullable();
			$table->text('exsm_dod')->nullable();
			$table->text('exsm_month_served')->nullable();
			
			$table->text('govt_servant')->nullable();
			$table->text('gs_type')->nullable();
			$table->text('gs_type_other')->nullable();
			$table->text('gs_doj')->nullable();
			$table->text('gs_dptmnt')->nullable();

			$table->text('govt_civil_side')->nullable();
			$table->text('riots')->nullable();
			$table->text('jk_domicile_range')->nullable();
			$table->text('jk_domicile')->nullable();
			$table->text('jk_from')->nullable();
			$table->text('jk_to')->nullable();
			
			$table->text('caste')->nullable();
			$table->text('caste_other')->nullable();
			$table->text('caste_certificate_no')->nullable();
			$table->text('caste_doi')->nullable();
			
			$table->string('upload_caste')->nullable();
			$table->string('upload_noncreamy_layer')->nullable();
			$table->string('upload_photo')->nullable();
			$table->string('upload_sign')->nullable();
			$table->string('upload_thumb')->nullable();
			$table->string('upload_age_proof')->nullable();

			
			$table->text('x_status')->nullable();
			$table->text('x_rd')->nullable();
			$table->text('x_subject')->nullable();
			$table->text('x_board')->nullable();
			$table->text('x_yop')->nullable();
			$table->text('x_marks_obtain')->nullable();
			$table->text('x_max_marks')->nullable();
			$table->text('x_pecentage')->nullable();
			$table->text('x_grade')->nullable();
			$table->string('x_upload')->nullable();
			
			
			$table->text('xii_status')->nullable();
			$table->text('xii_rd')->nullable();
			$table->text('xii_subject')->nullable();
			$table->text('xii_board')->nullable();
			$table->text('xii_yop')->nullable();
			$table->text('xii_marks_obtain')->nullable();
			$table->text('xii_max_marks')->nullable();
			$table->text('xii_pecentage')->nullable();
			$table->text('xii_grade')->nullable();
			$table->string('xii_upload')->nullable();
			
			
			$table->text('diploma_status')->nullable();
			$table->text('diploma_rd')->nullable();
			$table->text('diploma_subject')->nullable();
			$table->text('diploma_board')->nullable();
			$table->text('diploma_yop')->nullable();
			$table->text('diploma_marks_obtain')->nullable();
			$table->text('diploma_max_marks')->nullable();
			$table->text('diploma_pecentage')->nullable();
			$table->text('diploma_grade')->nullable();
			$table->string('diploma_upload')->nullable();
			
			
			$table->text('ug_status')->nullable();
			$table->text('ug_rd')->nullable();
			$table->text('ug_subject')->nullable();
			$table->text('ug_board')->nullable();
			$table->text('ug_yop')->nullable();
			$table->text('ug_marks_obtain')->nullable();
			$table->text('ug_max_marks')->nullable();
			$table->text('ug_pecentage')->nullable();
			$table->text('ug_grade')->nullable();
			$table->string('ug_upload')->nullable();
			
			
			$table->text('pg_status')->nullable();
			$table->text('pg_rd')->nullable();
			$table->text('pg_subject')->nullable();
			$table->text('pg_board')->nullable();
			$table->text('pg_yop')->nullable();
			$table->text('pg_marks_obtain')->nullable();
			$table->text('pg_max_marks')->nullable();
			$table->text('pg_pecentage')->nullable();
			$table->text('pg_grade')->nullable();
			$table->string('pg_upload')->nullable();
			
			
			$table->text('phd_status')->nullable();
			$table->text('phd_rd')->nullable();
			$table->text('phd_subject')->nullable();
			$table->text('phd_board')->nullable();
			$table->text('phd_yop')->nullable();
			$table->text('phd_marks_obtain')->nullable();
			$table->text('phd_max_marks')->nullable();
			$table->text('phd_pecentage')->nullable();
			$table->text('phd_grade')->nullable();
			$table->string('phd_upload')->nullable();
			
			
			$table->text('add_invoice')->nullable();
			$table->text('c_add1')->nullable();
			$table->text('c_add2')->nullable();
			$table->text('c_add3')->nullable();
			$table->text('c_add4')->nullable();
			$table->text('c_add5')->nullable();
			$table->text('c_pin')->nullable();
			
			$table->text('p_add1')->nullable();
			$table->text('p_add2')->nullable();
			$table->text('p_add3')->nullable();
			$table->text('p_add4')->nullable();
			$table->text('p_add5')->nullable();
			$table->text('p_pin')->nullable();
			
			$table->text('cent1')->nullable();
			$table->text('cent2')->nullable();
			$table->text('cent3')->nullable();
			$table->text('cent4')->nullable();			
				
            $table->text('extra_1')->nullable();			
            $table->text('extra_2')->nullable();			
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
        Schema::dropIfExists('userforms');
    }
}
