<?php

use Illuminate\Support\Facades\Route;

Route::get('object-details/:slug', function ($slug) {
    $asset = \NielsVanDenDries\Assetmanagement\Models\Asset::where('slug', $slug)->firstOrFail();
    return \Redirect::to('asset/' . $asset->id);
});

Route::get('object-details/:slug', 'NielsVanDenDries\Assetmanagement\Controllers\AssetController@show')->where('slug', '[0-9]+');



