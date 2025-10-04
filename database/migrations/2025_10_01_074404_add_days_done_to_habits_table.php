<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('habits', function (Blueprint $table) {
        $table->integer('days_done')->default(0);
        $table->date('last_done')->nullable();
    });
}

public function down()
{
    Schema::table('habits', function (Blueprint $table) {
        $table->dropColumn('days_done');
        $table->dropColumn('last_done');
    });
}

};
