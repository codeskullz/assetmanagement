<?php namespace Nielsvandendries\Assetmanagement\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\Assetmanagement\Models\Asset;

class Assetlist extends ComponentBase
{
    public $assets;
    public function componentDetails()
    {
        return [
            'name' => 'Assetlist',
            'description' => 'A list of all Assets'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->assets = Asset::get()->toArray();
    }
}
