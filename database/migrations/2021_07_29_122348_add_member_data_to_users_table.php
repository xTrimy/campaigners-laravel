<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMemberDataToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone',16);
            $table->foreignId('faculty_id')->nullable()->constrained()->onDelete('set null')->onUpdate('set null');
            $table->foreignId('committee_id')->nullable()->constrained()->onDelete('set null')->onUpdate('set null');
            $table->foreignId('school_id')->nullable()->constrained()->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('faculty_id');
            $table->dropColumn('committee_id');
            $table->dropColumn('school_id');
        });
    }
}
