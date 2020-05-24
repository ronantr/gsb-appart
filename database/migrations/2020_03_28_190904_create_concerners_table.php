<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcernersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerners', function (Blueprint $table) {
            $table->foreignId('demande_id')->constrained();
            $table->char('villearrondissements',128)->nullable()->default('NULL');
            $table->primary(['demande_id', 'villearrondissements']);
            $table->index(['demande_id', 'villearrondissements']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('concerners');
    }
}
