<?php namespace NielsVanDenDries\Assetmanagement\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Owners extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Assetmanagement', 'main-menu-item', 'side-menu-item2');
    }
}
