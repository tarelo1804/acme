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
        Schema::create('projects', function (Blueprint $table) {   
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->date('start_date');
            $table->date('delivery_date');
            $table->foreignId('zone_id')->constrained('zone');
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('architect_id')->constrained('architects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
