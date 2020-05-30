<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInfoToResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resumes', function (Blueprint $table) {
            $table->text('position');
            $table->text('city');
            $table->integer('employment_type');
            $table->integer('salary')->nullable();
            $table->integer('job_category');
            $table->text('experience')->nullable();
            $table->text('last_job')->nullable();
            $table->date('job_date_start')->nullable();
            $table->date('job_date_finish')->nullable();
            $table->text('duties')->nullable();
            $table->integer('no_experience')->nullable();
            $table->text('education_lvl')->nullable();
            $table->integer('type_education_lvl')->nullable();
            $table->text('institution')->nullable();
            $table->date('education_date_start')->nullable();
            $table->date('education_date_finish')->nullable();
            $table->integer('resume_visibility')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resumes', function (Blueprint $table) {
            $table->dropColumn(['position', 'city', 'employment_type', 'salary', 'job_category',
                                'experience', 'last_job', 'job_date_start', 'job_date_finish',
                                'duties', 'no_experience', 'education_lvl', 'type_education_lvl',
                                'institution', 'education_date_start', 'education_date_finish',
                                 'resume_visibility']);
        });
    }
}
