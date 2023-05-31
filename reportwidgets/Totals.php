<?php namespace Nielsvandendries\Assetmanagement\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;
use NielsVanDenDries\Assetmanagement\Models\Asset;

class Totals extends ReportWidgetBase
{
    protected $defaultAlias = 'TotalsReportWidget';

    public function defineProperties()
    {
    }

    public function render()
    {
        $assetCount = Asset::count();

        return $this->makePartial('widget', ['assetCount' => $assetCount]);
    }

    public function prepareVars()
    {
    }

    protected function loadAssets()
    {
    }
}
