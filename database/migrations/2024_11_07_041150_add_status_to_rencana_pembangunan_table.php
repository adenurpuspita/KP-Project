<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('rencana_pembangunan', function (Blueprint $table) {
            $table->string('status')->default('Pending'); // Default status to 'Pending'
        });
    }
    
    public function down()
    {
        Schema::table('rencana_pembangunan', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
