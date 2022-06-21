<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements("id");
            
            $table->string("name");
            $table->unsignedBigInteger("cat_id");
            $table->foreign("cat_id")->references("id")->on('cats');
            $table->unsignedBigInteger("teatcher_id");
            $table->foreign("teatcher_id")->references("id")->on('teatchers');
            $table->string("spec");  //speatialize
            $table->string("desc"); //description
            $table->integer("price");
            $table->string("img");
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
        Schema::dropIfExists('courses');
    }
}
