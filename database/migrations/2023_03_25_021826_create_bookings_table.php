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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            // $table->string('fullname');
            // $table->string('email');
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('phone');
            
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            
            $table->date('date');
            
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('id')->on('staffs');

            $table->tinyInteger('timings')->default(1)->comment("1: 08:00AM & 2: 08:30AM & 3: 09:00AM & 4: 09:30AM & 5: 10:00AM & 6: 10:30AM & 7: 11:00AM & 8: 11:30AM & 9: 13:00PM & 10: 13:30PM & 11: 14:00PM & 12: 14:30PM & 13: 15:00PM & 14: 15:30PM & 15: 16:00PM & 16: 16:30PM & 17: 17:00PM & 18: 17:30PM");
            
            // $table->unsignedBigInteger('voucher_id');
            // $table->foreign('voucher_id')->references('id')->on('vouchers');
            
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
