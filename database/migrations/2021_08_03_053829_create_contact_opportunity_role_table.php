<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactOpportunityRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_opportunity_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('contact_id');
            $table->unsignedInteger('opportunity_id');
            $table->timestamp('date_time');
            $table->string('other_details');
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
        Schema::dropIfExists('contact_opportunity_role');
    }
}
