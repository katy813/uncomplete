<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name',100);
            $table->text('description')->nullable();
            $table->enum('state',['new','old']);
            $table->decimal('price',8,2);
            $table->enum('charityfee',['20%','30%','50%','70%','100%']);
            $table->enum('status',['available','reserved','denied','sold'])->default('denied');
            $table->enum('category',['books','furniture','accessories','other'])->default('other');
            $table->string('itemimage')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->foreign('seller_id')->references('id')->on('users');
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->foreign('buyer_id')->references('id')->on('users');
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
        Schema::dropIfExists('items');
    }
}
