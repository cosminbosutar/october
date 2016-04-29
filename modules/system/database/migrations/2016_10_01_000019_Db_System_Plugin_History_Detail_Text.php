<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class DbSystemPluginHistoryDetailText extends Migration
{
    public function up()
    {
        Schema::table('system_plugin_history', function (Blueprint $table) {
            $table->text('detail')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('system_plugin_history', function (Blueprint $table) {
            $table->string('detail')->nullable()->change();
        });
    }
}