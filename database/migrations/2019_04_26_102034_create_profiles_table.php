<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->text('photo')->nullable();
             $table->string('cv');
             $table->text('post');
             $table->text('competence');
             $table->text('adress');
             $table->text('tel');
             $table->text('permis')->nullable();
             $table->text('motorise')->nullable();
             $table->integer('user_id')->unsigned()->index();
             $table->integer('contract_id')->unsigned()->index();
             $table->integer('etude_id')->unsigned()->index();
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
        Schema::dropIfExists('profiles');
    }
}
