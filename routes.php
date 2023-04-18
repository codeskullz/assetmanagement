<?php

use Illuminate\Support\Facades\Route;

Route::get('asset/:slug', function($slug) {
    $asset = \NielsVanDenDries\Assetmanagement\Models\Asset::where('slug', $slug)->first();
    return \Response::make(\View::make('nielsvandendries.assetmanagement::assetdetails', ['asset' => $asset]));
});


