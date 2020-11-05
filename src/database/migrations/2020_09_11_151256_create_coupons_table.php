<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_account_id')->nullable();
            $table->string('available_on_course_page')->default('no');

            $table->string('type')->default('free'); //free, discount
            $table->double('price', 8, 2);
            
            $table->string('status')->default('on');
            $table->dateTime('expiry');
            $table->float('countdown_timer', 3, 2)->nullable(); // user should see how long the coupon is available
            $table->integer('total_available');
            $table->integer('remaining')->nullable();
            
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
        Schema::dropIfExists('coupons');
    }
}
