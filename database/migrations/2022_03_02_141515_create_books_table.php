<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
             $table->bigIncrements('book_id');
			$table->string('book_title',1000)->nullable();
			$table->string('author_1',1000)->nullable();
			$table->string('author_2',1000)->nullable();
			$table->unsignedBigInteger('category_id')->unsigned()->nullable();
            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
			$table->text('description')->nullable();
            $table->integer('publication_year')->nullable();
            $table->timestamps();
		    $table->softDeletes();
            $table->foreign('user_id')->references('user_id')->on('user');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
                    $table->dropForeign(['user_id']);


    }
}
