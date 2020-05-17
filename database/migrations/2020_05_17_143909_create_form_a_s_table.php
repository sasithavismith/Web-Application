<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_a_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Full_name');
            $table->string('designation');
            $table->string('department');
            $table->string('faculty');
            $table->string('tel');
            $table->string('email');
            $table->string('event_name');
            $table->string('Contact_detail');
            $table->string('country');
            $table->string('period');
            $table->string('Title_of_the_abstract');
            $table->string('Date_of_the_acceptance');
            $table->string('other_academic_activities');
            $table->string('Registration_fee');
            $table->string('Air_ticket');
            $table->string('Accommodation_and_meal');
            $table->string('Iternal_travelling');
            $table->string('Total_cost');
            $table->string('Finacial_Assistance');
            $table->string('Year_I');
            $table->string('Country_I');
            $table->string('Amount_received_I');
            $table->string('Year_II');
            $table->string('Country_II');
            $table->string('Amount_received_II');
            $table->string('Year_III');
            $table->string('Country_III');
            $table->string('Amount_received_III');
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
        Schema::dropIfExists('form_a_s');
    }
}
