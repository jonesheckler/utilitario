<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_templates', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('client_smtp_id')->unsigned()->nullable();
            $table->foreign('client_smtp_id')->references('id')->on('client_smpt')->onDelete('cascade');
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
        Schema::dropIfExists('client_templates');
    }
}
