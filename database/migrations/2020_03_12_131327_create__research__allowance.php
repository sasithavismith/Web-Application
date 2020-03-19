<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchAllowance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_research__allowance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('designation');
            $table->string('department');
            $table->string('faculty');
            $table->boolean('a');
            $table->boolean('b');
            $table->boolean('c');
            $table->string('published');
            $table->string('ongoing');
            $table->string('status');
            $table->string('current');
            $table->string('any_type');
            $table->string('title');
            $table->string('objective');
            $table->string('destription');
            $table->string('duration');
            $table->string('expected_date');
            $table->string('output');
            $table->date('date');
            $table->boolean('isapproved')->default(0);
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
        Schema::dropIfExists('_research__allowance');
    }
}
