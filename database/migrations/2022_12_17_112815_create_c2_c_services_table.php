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
        Schema::create('c2_c_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('order_id')->constrained('sub_service_users');
            
            $table->string('log_image_from', 255)->nullable();
            $table->string('letter_from', 255)->nullable();
            $table->string('driving_license_from', 255)->nullable();
            $table->string('others_from', 255)->nullable();

            $table->string('log_image_to', 255)->nullable();
            $table->string('letter_to', 255)->nullable();
            $table->string('driving_license_to', 255)->nullable();
            $table->string('others_to', 255)->nullable();

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
        Schema::dropIfExists('c2_c_services');
    }
};
