<?php namespace NielsVanDenDries\Assetmanagement;

use System\Classes\PluginBase;
use Nielsvandendries\Assetmanagement\Models\Asset;
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
}
