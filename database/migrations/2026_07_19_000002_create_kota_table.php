<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up()
    {
        Schema::create('kota', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('provinsi_id')->constrained('provinsi')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('kota');
    }
};
