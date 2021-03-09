<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->integer('CompanyID')->nullable();
            $table->integer('StationType')->nullable();
            $table->text('StationName');
            $table->text('ParentStation')->nullable();
            $table->text('CurrencyUse')->nullable();
            $table->text('CurrencySymbol')->nullable();
            $table->text('Address');
            $table->text('PhoneNumber');
            $table->text('FaxNumber');
            $table->text('EmailAddress');
            $table->text('WebSite');
            $table->text('AdditionalNote')->nullable();
            $table->text('images');
            $table->integer('status'); //(1)
            $table->integer('RegId')->nullable();;
            $table->integer('UpdId')->nullable();;
            $table->integer('hide_show');//( 1 = show , 0 = hide )
            $table->text('token');
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
        Schema::dropIfExists('stations');
    }
}
