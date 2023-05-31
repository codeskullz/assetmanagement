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

    public function registerReportWidgets()
    {
        return [
            AssetCountReportWidget::class => [
                'label' => 'Totaal aantal assets',
                'context' => 'dashboard'
            ]
        ];
    }

    public function boot()
    {
        // Handmatig registreren van de AssetCountReportWidget-klasse
        // Event::listen('backend.report.extendWidgets', function ($widgetManager) {
        // $widgetManager->registerReportWidget(AssetCountReportWidget::class);
        // });
    }
}
