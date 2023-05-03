<?php namespace NielsVanDenDries\Assetmanagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesAssetmanagementAsset extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_assetmanagement_asset', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('user_id')->nullable();
            $table->string('users_id')->nullable();
            $table->string('owner_id')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('model')->nullable();
            $table->string('mac')->nullable();
            $table->string('ip')->nullable();
            $table->string('serialnumber')->nullable();
            $table->string('status')->nullable();
            $table->string('categorie')->nullable();
            $table->text('notes')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_assetmanagement_asset');
    }
}
