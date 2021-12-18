<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function($table) {
            $table->dropUnique(['email']);
            $table->string('username')->unique();;
            $table->string('firstname')->nullable($value = true);
            $table->string('lastname')->nullable($value = true);
            $table->integer('active')->default(0); //not login

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        //
        Schema::table('users', function($table) {
            $table->string('email')->unique();
            $table->dropColumn(['username','firstname','lastname','active']);

            //$table->string('name')->unique(false)->change();

        });

        Schema::dropIfExists('users');
    }
}
