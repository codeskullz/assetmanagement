<?php namespace Nielsvandendries\Assetmanagement\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\Assetmanagement\Models\Asset;

class Assetdetails extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Assetdetails',
            'description' => 'Asset Details'
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
