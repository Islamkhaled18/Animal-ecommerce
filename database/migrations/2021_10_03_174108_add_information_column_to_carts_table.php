<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInformationColumnToCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->string('first_name')->after('product_id');
            $table->string('last_name')->after('first_name');
            $table->string('city')->after('last_name');
            $table->string('Governorate')->after('city');
            $table->string('country')->after('Governorate');
            $table->string('post_address')->after('country');
            $table->string('address')->after('post_address');
            $table->string('phone')->after('address');
            $table->string('email_address')->after('phone');
            $table->string('shipping_method')->after('email_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('city');
            $table->dropColumn('Governorate');
            $table->dropColumn('country');
            $table->dropColumn('post_address');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('email_address');
            $table->dropColumn('shipping_method');
        });
    }
}
