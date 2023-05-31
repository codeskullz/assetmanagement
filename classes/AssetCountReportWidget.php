<?php

namespace Author\Plugin\Classes;

use Backend\Classes\ReportWidgetBase;
use NielsVanDenDries\Assetmanagement\Asset;

class AssetCountReportWidget extends ReportWidgetBase
{
    public function render()
    {
        $assetCount = Asset::count();

        return $this->makePartial('widget', ['assetCount' => $assetCount]);
    }
}
