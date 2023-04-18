<?php namespace NielsVanDenDries\Assetmanagement;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            \NielsVanDenDries\Assetmanagement\Components\Assetlist::class => 'Assetlist',
            \NielsVanDenDries\Assetmanagement\Components\Assetdetails::class => 'Assetdetails'
        ];
    }

    public function registerSettings()
    {
    }
}
