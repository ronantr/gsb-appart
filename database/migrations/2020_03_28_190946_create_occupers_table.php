<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupers', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('appartement_idappart')->constrained();
            $table->primary(['user_id', 'appartement_idappart']);
            $table->index(['user_id', 'appartement_idappart']);
            $table->date('datedebutoccuper')->nullable($value = true);
            $table->date('datefineoccuper')->nullable($value = true);
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
        Schema::dropIfExists('occupers');
    }
}
