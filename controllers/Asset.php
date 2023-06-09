<?php 
namespace NielsVanDenDries\Assetmanagement\Controllers;

use Backend\Classes\Controller;
use RainLab\Translate\Traits\Sluggable;
use BackendMenu;

class Asset extends Controller
{
    public $implement = [        
        'Backend\Behaviors\ListController',        
        'Backend\Behaviors\FormController'    
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Assetmanagement', 'main-menu-item');
    }
}
