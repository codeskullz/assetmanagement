<?php namespace Nielsvandendries\Assetmanagement\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Assetmanagement\Models\Asset;

class Assetlist extends ComponentBase
{
    public $assets;

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
        $this->assets = Asset::all()->toArray();
    }
}
