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
        traceLog($slug); // Controleer de waarde van de slug
        
        $asset = Asset::where('slug', $slug)->first();
        traceLog($asset); // Controleer of de asset is gevonden
        
        if (!$asset) {
            traceLog(Asset::all()->pluck('slug')); // Controleer de lijst van alle slugs in de database
            traceLog('Asset not found'); // Voeg deze regel toe om te controleren of de asset niet wordt gevonden
        }
    }
}
