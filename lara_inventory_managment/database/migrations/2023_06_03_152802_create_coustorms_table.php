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
        Schema::create('coustorms', function (Blueprint $table) {
            $table->id();
            $table->string('coustomer_name');
            $table->string('email');
            $table->string('addres');
            $table->string('phone');
            $table->string('shope_name')->nullable();
            $table->string('photo')->nullable();
            $table->string('account_helder')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('city')->nullable();
            $table->integer('status')->default(1);

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
        Schema::dropIfExists('coustorms');
    }
};