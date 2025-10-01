<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('architectural_drawings', function (Blueprint $table) {
            $table->integer('version')->default(1)->after('project_id');
        });
    }

    public function down()
    {
        Schema::table('architectural_drawings', function (Blueprint $table) {
            $table->dropColumn('version');
        });
    }
};