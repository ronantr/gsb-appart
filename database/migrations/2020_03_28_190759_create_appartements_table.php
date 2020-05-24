<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppartementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->integerIncrements('idappart');
            $table->foreignId('users_id')->constrained();
            $table->foreignId('locataires_idlocataires')->constrained();
            $table->foreignId('proprietaires_idproprietaires')->constrained();
            $table->string('rueappart',128)->nullable()->default('NULL');
            $table->char('cpappart',128)->nullable()->default('NULL');
            $table->char('villeappart',128)->nullable()->default('NULL');
            $table->char('paysappart',32)->nullable()->default('NULL');
            $table->string('etgappart',128)->nullable()->default('NULL');
            $table->string('typeappart',128)->nullable()->default('NULL');
            $table->unsignedDecimal('prixlocappart',13,2);
            $table->unsignedDecimal('prixchargeappart',13,2);
            $table->unsignedDecimal('prixtotal',13,2);// -moins les 7% due a gsb fait avec un trigger bdd
            $table->string('ascenseurappart',128)->nullable()->default('NULL');
            $table->string('preavisappart',128)->nullable()->default('NULL');
            $table->date('datelibreappart')->nullable($value = true);
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
        Schema::dropIfExists('appartements');
    }
}
