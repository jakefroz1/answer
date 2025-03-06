<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->foreignId('e_id')->nullable()->constrained('employees'); // 新员工id
            $table->string('s_id'); // 步骤id
            $table->string('question'); // 问题
            $table->string('answer'); // 回答
            $table->timestamps();
            $table->primary('e_id','s_id'); // 新员工id和步骤id组合唯一
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
