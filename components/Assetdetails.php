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
        return [
            'slug' => [
                'title' => 'Asset Slug',
                'description' => 'The slug of the asset',
                'default' => null,
                'type' => 'string',
            ],
        ];
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
        $slug = $this->property('slug');
        $asset = Asset::where('slug', $slug)->first()->get()->toArray();
        $this->page['asset'] = $asset;
    }
}
