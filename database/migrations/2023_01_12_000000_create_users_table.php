<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained();
            
           
        });
        Schema::table('users', function(Blueprint $table){
            $table->foreignId('сathedra_id')->constrained();
            $table->string('fio')->nullable(false);
            $table->string('email')->nullable(false)->unique();
            $table->string('password')->nullable(false);
            $table->string('role')->default('user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
