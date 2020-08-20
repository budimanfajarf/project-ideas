<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('tier_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('name', 70);
            $table->string('slug', 91);
            $table->string('sort_description', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->timestamps();
            $table->softDeletes();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ideas');
    }
}
