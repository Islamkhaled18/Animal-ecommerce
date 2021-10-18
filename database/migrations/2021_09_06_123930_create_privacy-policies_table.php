<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivacyPoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privacy_policies', function (Blueprint $table) {
            $table->increments('id');
            $table->longtext('main_text');
            $table->longtext('text_one');
            $table->longtext('text_two');
            $table->longtext('text_three');
            $table->longtext('text_four');
            $table->longtext('text_five');
            $table->longtext('text_six');
            $table->longtext('text_seven');
            $table->longtext('text_eight');
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
        Schema::dropIfExists('privacy_policies');
    }
}
