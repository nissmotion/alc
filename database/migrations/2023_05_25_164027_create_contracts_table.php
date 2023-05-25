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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipment_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('name');
            $table->string('address');
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->text('additional_notes')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('rate');
            $table->string('term');
            $table->string('final_amount')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
