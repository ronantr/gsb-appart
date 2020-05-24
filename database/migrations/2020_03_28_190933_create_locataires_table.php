<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locataires', function (Blueprint $table) {
          $table->integerIncrements('idlocataires');
          $table->foreignId('users_id')->constrained();
          $table->string('numlocataires',128)->nullable()->default('NULL');
          $table->string('numerocomptebanquelocataires',128)->nullable()->default('NULL');
          $table->string('nombanquelocataires',128)->nullable()->default('NULL');
          $table->string('ruebanquelocataires',128)->nullable()->default('NULL');
          $table->string('cpvillebanquelocataires',128)->nullable()->default('NULL');
          $table->string('telbanquelocataires',128)->nullable()->default('NULL');
          $table->string('riblocataires',128)->nullable()->default('NULL');
          $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
          $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locataires');
    }
}
