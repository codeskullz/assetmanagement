<?php namespace NielsVanDenDries\Assetmanagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesAssetmanagementSettings extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_assetmanagement_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->boolean('assets');
            $table->boolean('owners');
            $table->boolean('users');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_assetmanagement_settings');
    }
}
