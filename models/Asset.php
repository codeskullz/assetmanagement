<?php namespace NielsVanDenDries\Assetmanagement\Models;

use Model;
use October\Rain\Database\Traits\Sluggable;

class Asset extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use Sluggable;
    
    public $slugs = ['name'];
    
    public $table = 'nielsvandendries_assetmanagement_asset';

    public $rules = [
    ];

    public $attachOne = [
    'image' => \System\Models\File::class
    ];

}
