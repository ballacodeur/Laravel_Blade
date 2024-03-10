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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('cni')->unique();
            $table->string('horaire');
            $table->string('qrcode');
            $table->string('cjm');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mdp');
            $table->string('statusCompte', 50); // ajustez la longueur selon vos besoins
            $table->string('telephone');
            $table->string('profil');
            // $table->unsignedBigInteger('profileId')->nullable(); // autorise les valeurs nulles
            // $table->foreign('profileId')->references('id')->on('profils')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
