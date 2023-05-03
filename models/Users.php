<?php namespace NielsVanDenDries\Assetmanagement\Models;

use Model;

/**
 * Model
 */
class Users extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'nielsvandendries_assetmanagement_users';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $hasMany = [
        'asset' => \NielsVanDenDries\Assetmanagement\Models\Asset::class
    ];

}
