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

        $image = Asset::with('image')->first();
    
        $photoDetails = [];
    
        if ($image) {
            $photoDetails = $image->photoDetails;
        }
    
        $this->page['photoDetails'] = $photoDetails;

        $slug = $this->property('slug');
        $asset = Asset::where('slug', $slug)->first();
    
        $this->page['asset'] = $asset;
    }
}
