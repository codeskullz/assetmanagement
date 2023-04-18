<?php namespace NielsVanDenDries\Assetmanagement\Models;

use Model;

/**
 * Model
 */
class Asset extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_assetmanagement_asset';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
    'image' => \System\Models\File::class
];
}
