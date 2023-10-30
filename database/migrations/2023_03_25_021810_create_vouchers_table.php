<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            // $table->string('number_voucher');
            $table->string('name');
            $table->text('title');
            $table->longText('discription');
            $table->date('time_start');
            $table->date('time_end');
            $table->string('image');

            // $table->unsignedBigInteger('service_id');
            // $table->foreign('service_id')->references('id')->on('services');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
