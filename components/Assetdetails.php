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
        $slug = $this->property('slug');
        $asset = Asset::where('slug', $slug)->first();

        if ($asset) {
            $this->page['asset'] = $asset;
        } else {
            $this->page['asset'] = null;
        }
    }
}
