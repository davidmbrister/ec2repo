<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // a user can have many courses and a course can have many users
        Schema::create('camp_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('camp_id');
            $table->integer('user_account_id');
            $table->dateTime('paid_date')->nullable();
            $table->double('paid_amount')->nullable();
            $table->tinyInteger('status')->default(0); // 1 is live
            $table->softDeletes();
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
        Schema::dropIfExists('camp_user');
    }
}
