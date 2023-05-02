<?php namespace NielsVanDenDries\Assetmanagement\Models;

use Model;

/**
 * Model
 */
class Owners extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_assetmanagement_owners';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'asset' => \NielsVanDenDries\Assetmanagement\Models\Asset::class
    ];
}
