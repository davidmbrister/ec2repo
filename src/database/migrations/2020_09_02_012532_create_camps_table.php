<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camps', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('title');
            $table->longText('description');
            $table->string('photo')->nullable();
            $table->string('video')->nullable(); // e.g. a promo vid
            $table->integer('status')->default(0); // 1 is live
           
            $table->longText('what_will_student_learn')->nullable();
            $table->string('age_group')->nullable();
            $table->integer('capacity')->nullable();

            $table->double('discount_price', 8, 2)->nullable();
            $table->double('standard_price', 8, 2);
            $table->integer('subscriber_count')->default(0)->nullable();
            
            
            $table->string('tags')->isNullable(); //tech, sports, science ... kinda like categories
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
        Schema::dropIfExists('camps');
    }
}
