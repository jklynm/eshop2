<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteConfigrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_configrations', function (Blueprint $table) {
            $table->id();
            $table->string('site_title')->nullable();
            $table->string('logo');
            $table->string('email');
            $table->string('email2')->nullable();
            $table->string('phone');
            $table->string('mobile')->nullable();
            $table->string('address');
            $table->string('site_info')->nullable();
            $table->longText('google_map')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->text('meta_description')->nullable();
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
        Schema::dropIfExists('site_configrations');
    }
}
