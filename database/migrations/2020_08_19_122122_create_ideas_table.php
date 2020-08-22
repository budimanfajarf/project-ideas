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
            $table->unsignedBigInteger('ideaable_id');
            $table->string('ideaable_type');
            $table->unsignedTinyInteger('tier_id');
            $table->string('name', 70);
            $table->string('slug', 91);
            $table->string('description_sort', 255);
            $table->text('description_required');
            $table->text('description_additional')->nullable();
            $table->text('description');
            $table->text('content');
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