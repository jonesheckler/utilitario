<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_templates', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->string('type');
            $table->integer('order');
            $table->bigInteger('client_template_id')->unsigned()->nullable();
            $table->foreign('client_template_id')->references('id')->on('client_templates')->onDelete('cascade');
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
        Schema::dropIfExists('field_templates');
    }
}
