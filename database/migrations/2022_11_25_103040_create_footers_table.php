<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('footer_phone_number')->nullable();
            $table->text('footer_short_description')->nullable();
            $table->string('footer_country')->nullable();
            $table->string('footer_address')->nullable();
            $table->string('footer_email')->nullable();
            $table->string('footer_social_title')->nullable();
            $table->text('footer_social_description')->nullable();
            $table->string('footer_social_facebook')->nullable();
            $table->string('footer_social_twitter')->nullable();
            $table->string('footer_social_behance')->nullable();
            $table->string('footer_social_linkedin')->nullable();
            $table->string('footer_social_instagram')->nullable();
            $table->string('footer_copyright')->nullable();
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
        Schema::dropIfExists('footers');
    }
};
