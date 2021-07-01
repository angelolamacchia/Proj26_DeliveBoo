
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome_attivita');
            $table->string('email')->unique();
            $table->string('indirizzo');
            $table->string('p_iva', 11)->unique();
            $table->string('numero_telefono', 10)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('img_logo')->nullable();
            $table->string('img_banner')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
