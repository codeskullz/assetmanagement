<?php namespace Nielsvandendries\Assetmanagement\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Assetmanagement\Models\Asset;

class Assetdetails extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Assetdetails',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'Asset Slug',
                'type' => 'string',
                'default' => '{{ :slug }}'
            ]
        ];
    }

    public function onRun()
    {
        $slug = $this->param('slug');
    
        $this->asset = Asset::findBySlug($slug);
    
        if (!$this->asset) {
            return $this->controller->run('404');
        }
    }
}
