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
        Schema::create('idcard', function (Blueprint $table) {
            $table->id();
            $table->string('idc_number',13);
            $table->string('th_title_name',20);
            $table->string('th_first_name');
            $table->string('th_last_name');
            $table->string('en_title_name',20);
            $table->string('en_first_name');
            $table->string('en_last_name');
            $table->string('building_no');
//            $table->string('village_no');
            $table->string('sub_district');
            $table->string('district');
            $table->string('province');
            $table->date('birth_date');
            $table->string('religion',20);
            $table->date('issue_date');
            $table->date('expire_date');
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
        Schema::dropIfExists('idcard');
    }
};
