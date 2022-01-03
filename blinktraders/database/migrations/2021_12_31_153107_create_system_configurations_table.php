<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->float('withdraw_charge')->nullable();
            $table->float('deposit_charge')->nullable();
            $table->integer('upgrade_fee')->nullable();
            $table->tinyInteger('kyc')->default(0);
            $table->tinyInteger('email_verification')->default(0);
            $table->tinyInteger('sms_verification')->default(0);
            $table->tinyInteger('upgrade_status')->default(0);
            $table->tinyInteger('email_notify')->default(0);
            $table->tinyInteger('sms_notify')->default(0);
            $table->tinyInteger('registration')->default(0);
            $table->tinyInteger('referral')->default(0);
            $table->string('subject')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('system_configurations');
    }
}
