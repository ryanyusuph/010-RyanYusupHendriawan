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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id(); 
            $table->text("nomor_induk");  
            $table->text("nama_siswa");  
            $table->text("no_telp");  
            $table->text("jk");  
            $table->bigInteger("id_user");   
            $table->bigInteger("id_pembimbing");   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
