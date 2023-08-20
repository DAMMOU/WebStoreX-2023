<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->string('name', 128); //128 Taille raisonnable pour identifier des entités uniques
            $table->text('value')->nullable(); 
        });

        DB::table('settings')->insert([
            
            [
                'name' => 'author',
                'value' => 'DAMMOU Youssef',
            ],
            [
                'name' => 'keywords',
                'value' => 'appareils, vente en ligne, technologie, smartphones, ordinateurs portables,  accessoires électroniques',              
            ],
            [
                'name' => 'description',
                'value' => 'description of WebStoreX',
            ],
            [
                'name' => 'title',
                'value' => 'WebStoreX',
            ],
            [
                'name' => 'css',
                'value' => '',
            ],
            [
                'name' => 'js',
                'value' => '',
            ],
            [
                'name' => 'username',
                'value' => ''
            ],
        ]);
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
