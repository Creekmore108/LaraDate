<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->date('birthday');
            $table->string('gender');
            $table->string('orientation');
            $table->boolean('vaccinated')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('visible')->default(true);
            $table->string('height');
            $table->string('weight');
            $table->string('body_type');
            $table->string('hair_color');
            $table->string('eye_color');
            $table->string('eyewear');
            $table->string('ethnicity');
            $table->string('exercise');
            $table->string('politics');
            $table->string('have_children');
            $table->string('want_children');
            $table->string('energy_level');
            $table->string('tobacco');
            $table->string('weed');
            $table->string('alcohol');
            $table->string('diet');
            $table->string('spiritual_belief');
            $table->string('marital_status');
            $table->string('language');
            $table->string('living_situation');
            $table->string('relocate');
            $table->string('astrology')->nullable();
            $table->string('chinese_sign')->nullable();
            $table->string('ayurvedic')->nullable();
            $table->string('occupation')->nullable();
            $table->string('pets')->nullable();
            $table->string('income');
            $table->string('headline');
            $table->text('about');
            $table->string('personality');
            $table->text('interests');
            $table->text('desc_yourself');
            $table->text('desc_your_interested_in');
            $table->text('desc_ideal_relationship');
            $table->text('anything_else');
            $table->string('seeking_age_min');
            $table->string('seeking_age_max');
            $table->string('seeking_height_min');
            $table->string('seeking_height_max');
            $table->string('seeking_weight_min');
            $table->string('seeking_weight_max');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
