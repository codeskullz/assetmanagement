<?php namespace NielsVanDenDries\Assetmanagement\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesAssetmanagementOwners extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_assetmanagement_owners', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('company')->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('mail', 255)->nullable();
            $table->string('asset_id', 255)->change();
            $table->string('name');
            $table->string('address');
            $table->string('zipcode');
            $table->string('city');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_assetmanagement_owners');
    }
}
