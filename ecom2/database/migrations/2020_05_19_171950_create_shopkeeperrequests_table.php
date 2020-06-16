<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopkeeperrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopkeeperrequests', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('PhoneNumber');
            $table->mediumtext('Address');
            $table->string('NIC');
            $table->string('NameOftheBusinessOrganization');
            $table->string('businessType');
            $table->string('merchant');
            $table->string('MainSellingItem');
            $table->string('Organizationemail');
            $table->string('file');
            $table->string('email');
            $table->string('agreement');
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
        Schema::dropIfExists('shopkeeperrequests');
    }
}
