<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineesAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees_attendances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('university_id');
            $table->foreignId('school_id')->nullable()->constrained()->onDelete('set null')->onUpdate('set null');
            $table->foreignId('faculty_id')->nullable()->constrained()->onDelete('set null')->onUpdate('set null');
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
        Schema::dropIfExists('trainees_attendances');
    }
}
