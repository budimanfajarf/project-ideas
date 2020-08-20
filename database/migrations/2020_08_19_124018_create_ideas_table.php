<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

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
            $table->string('slug', 70);            
            $table->string('sort_description', 255)->nullable();            
            $table->text('markdown_description')->nullable();
            $table->text('markdown_content')->nullable(); 
            $table->string('github_markdown_url', 255)->nullable();
            $table->json('github_json')->default(new Expression('(JSON_ARRAY())'));
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
        Schema::dropIfExists('ideas');
    }
}
