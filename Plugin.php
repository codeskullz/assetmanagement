<?php namespace NielsVanDenDries\Assetmanagement;

use System\Classes\PluginBase;
use Route;


class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\NielsVanDenDries\Assetmanagement\Components\Assetlist' => 'Assetlist',
            '\NielsVanDenDries\Assetmanagement\Components\Assetdetails' => 'Assetdetails',
        ];
    }

    public function registerSettings()
    {
    }
}
