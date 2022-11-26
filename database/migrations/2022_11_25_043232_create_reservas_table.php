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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table ->string('slug',100)->unique();
            $table ->date('checkin');
            $table ->date('checkout');
            $table ->boolean('estado')->default(0);
            $table ->decimal('preciototal', 7,2);
            $table ->string('numHuesped', 2);
            $table ->boolean('mascotas')->default(0);
            $table ->foreignId('lugare_id')->constrained();
            $table ->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
