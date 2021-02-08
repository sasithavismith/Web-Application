<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManuscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuscripts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('designation');
            $table->string('department');
            $table->string('faculty');
            $table->string('title');
            $table->string('first_author');
            $table->string('corresponding_author');
            $table->string('other_author');
            $table->string('journal');
            $table->integer('volume_and_issue_number');
            $table->date('date_of_acceptance');
            $table->string('issn');
            $table->string('publisher');
            $table->string('publication_fee');
            $table->mediumText('file_copy')->nullable();
            $table->mediumText('file_evidence')->nullable();
            $table->mediumText('file_letter')->nullable();
            $table->mediumText('file_invoice')->nullable();
            $table->date('date1');
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
        Schema::dropIfExists('manuscripts');
    }
}
