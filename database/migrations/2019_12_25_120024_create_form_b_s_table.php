<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_b_s', function (Blueprint $table) {
        
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('designation');
            $table->string('department');
            $table->string('faculty');
            $table->string('tel');
            $table->string('email');
            $table->string('event');
            $table->string('country');
            $table->string('period');
            $table->string('title');
            $table->boolean('isapprovedvc')->default(0);
            $table->boolean('isapprovedean')->default(0);
            $table->boolean('isapprovedgrant')->default(0);
            $table->boolean('isapprovedhead')->default(0);
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
        Schema::dropIfExists('form_b_s');
    }
}
