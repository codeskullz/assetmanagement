<?php

use Illuminate\Support\Facades\Route;
use NielsVanDenDries\AssetManagement\Controllers\Asset;

Route::get('asset/{slug}', Asset::class.'@show');

