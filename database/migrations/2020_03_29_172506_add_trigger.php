<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // DB::unprepared('CREATE TRIGGER add_user_information AFTER INSERT ON `USERS` FOR EACH ROW
             //   BEGIN
              //     INSERT INTO `USERS` INSERT INTO `users` (`rue`, `codepostal`, `ville`, `pays`, `tel`, `datenaiss`,`email`,) VALUES (NEW.rue,);
              //  END');
        // INSERT INTO `users` (`id`, `name`, `rue`, `codepostal`, `ville`, `pays`, `tel`, `datenaiss`, `droit`, `email`, `email_verified_at`, `password`,`remember_token`, `created_at`)
        // VALUES (NULL, 'Mohamed Salah', '77 chemin de la cote du change', '93370', 'Montfermeil', 'France', '0613232555', '2020-03-01', '0',
        // 'irene72@live.fr', CURRENT_TIMESTAMP, '', NULL, CURRENT_TIMESTAMP);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // DB::unprepared('DROP TRIGGER `add_Item_city`');
    }
}
