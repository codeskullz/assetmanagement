<?php namespace Nielsvandendries\Assetmanagement\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\Assetmanagement\Models\Asset;

class Assetlist extends ComponentBase
{
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
        $assets = Asset::with('owner', 'user')->get()->toArray();
        $this->page['assets'] = $assets;
    }
}
