<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('address')->nullable();
            $table->integer('amount')->nullable();
            $table->string('paymentstatus')->nullable();
            $table->string('paymentref')->nullable();
            $table->string('datepaid')->nullable();
            $table->string('remarks')->nullable();
            $table->integer('ctickets')->nullable();
            $table->integer('atickets')->nullable();
            $table->integer('rooms')->nullable();
            $table->string('regno')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
