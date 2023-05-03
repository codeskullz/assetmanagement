<?php namespace NielsVanDenDries\Assetmanagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesAssetmanagementUsers extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_assetmanagement_users', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('company', 255)->nullable();
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('zipcode', 255);
            $table->string('city', 255);
            $table->string('asset_id', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('mail', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_assetmanagement_users');
    }
}
