<?php namespace NielsVanDenDries\Assetmanagement\Models;

use Model;
use October\Rain\Database\Traits\Sluggable;

class Asset extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use Sluggable;
    
    public $slugs = ['slug' => 'name'];

    public $sluggable = [
        'max_length' => 100,
        'on_update' => true
    ];
    
    public $table = 'nielsvandendries_assetmanagement_asset';

    public $rules = [
    ];

    public $attachOne = [
    'image' => \System\Models\File::class
    ];

    public $belongsTo = [
        'owner' => \NielsVanDenDries\Assetmanagement\Models\Owners::class,
        'user' => \NielsVanDenDries\Assetmanagement\Models\Users::class
    ];
}