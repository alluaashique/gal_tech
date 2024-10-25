<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->unsignedBigInteger('quiz_id')->references('id')->on('quiz')->onDelete('cascade');
            $table->string('question_id')->nullable();
            $table->text('question')->nullable();
            $table->boolean('is_answered')->default(false); 
            $table->boolean('is_correct')->default(false); 
            $table->timestamps(); 
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('questions'); 
    }
};
