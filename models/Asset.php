<?php namespace NielsVanDenDries\Assetmanagement\Models;

use Model;
use Sluggable;
use RainLab\Translate\Behaviors\TranslatableModel;

class Asset extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;
    
    public $slugs = ['slug' => 'id'];

    public $sluggable = [
        'max_length' => 100,
        'on_update' => true
    ];
    
    public $table = 'nielsvandendries_assetmanagement_asset';

    public $rules = [
    ];

    public $attachMany = [
        'image' => \System\Models\File::class
    ];

    public $belongsTo = [
        'owner' => \NielsVanDenDries\Assetmanagement\Models\Owners::class,
        'user' => \NielsVanDenDries\Assetmanagement\Models\Users::class
    ];

    public function getPhotoDetailsAttribute()
    {
        $photoDetails = [];

        foreach ($this->image as $photo) {
            $photoDetails[] = [
                'url' => $photo->getPath(),
                'title' => $photo->title,
                'description' => $photo->description,
            ];
        }

        return $photoDetails;
    }
}