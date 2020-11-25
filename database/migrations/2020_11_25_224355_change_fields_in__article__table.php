<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldsInArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Articles', function (Blueprint $table) {
            $table->string('title',150)->change();
            $table->renameColumn('slug','slug_fa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Articles', function (Blueprint $table) {
            $table->string('title',50)->change();
            $table->renameColumn('slug_fa','slug');
        });
    }
}
