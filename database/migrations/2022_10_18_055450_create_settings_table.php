<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('icon_site')->nullable();
            $table->string('address')->nullable();
            $table->string('contact_instagram')->nullable();
            $table->string('contact_facebook')->nullable();
            $table->string('contact_telegram')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('telegram_token')->nullable();
//            $table->json('setting');
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
        Schema::dropIfExists('settings');
    }
}
