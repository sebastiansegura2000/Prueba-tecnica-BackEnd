<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('names');
            $table->string('last_names');
            $table->string('identification')->unique();
            $table->string('address');
            $table->string('phone_number');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->foreignId('boss_id')->nullable()->constrained('employees');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
