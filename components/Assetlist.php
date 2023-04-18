<?php namespace Nielsvandendries\Assetmanagement\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Assetmanagement\Models\Asset;

class Assetlist extends ComponentBase
{
    public $asset;

    public function componentDetails()
    {
        return [
            'name' => 'Assetlist',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->asset = Asset::with('image')->get()->toArray();
    }
}
