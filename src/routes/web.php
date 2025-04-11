<?php

/*
|--------------------------------------------------------------------------
| CMS GET routes for non signed in admins
|--------------------------------------------------------------------------
*/

Route::prefix(config('zenbolt.cms_route_prefix'))->middleware(['web', 'admin'])->group(function () {
    Route::get('/', 'Zenbolt\Cms\Controllers\CmsController@redirectToLoginForm');
    Route::get('login', 'Zenbolt\Cms\Controllers\CmsController@showLoginForm')->name('admin-login');
});

// Asset
Route::get('/asset', 'Zenbolt\Cms\Controllers\CmsController@asset');

/*
|--------------------------------------------------------------------------
| CMS POST routes for non signed in admins
|--------------------------------------------------------------------------
*/

Route::prefix(config('zenbolt.cms_route_prefix'))->middleware(['web'])->group(function () {
    Route::post('login', 'Zenbolt\Cms\Controllers\CmsController@login');
});


/*
|--------------------------------------------------------------------------
| CMS basic routes for signed in admins
|--------------------------------------------------------------------------
*/

Route::prefix(config('zenbolt.cms_route_prefix'))->middleware(['web', 'admin'])->group(function () {
    Route::get('logout', 'Zenbolt\Cms\Controllers\CmsController@logout')->name('admin-logout');
    Route::get('home', 'Zenbolt\Cms\Controllers\CmsController@showHome')->name('admin-home');
    Route::get('profile', 'Zenbolt\Cms\Controllers\CmsController@showProfile')->name('admin-profile');
    Route::get('profile/edit', 'Zenbolt\Cms\Controllers\CmsController@showEditProfile')->name('admin-profile-edit');
    Route::post('profile/edit', 'Zenbolt\Cms\Controllers\CmsController@editProfile');
    Route::resource('/admins', 'Zenbolt\Cms\Controllers\AdminsController');
    Route::resource('/admin-roles', 'Zenbolt\Cms\Controllers\AdminRolesController');
    Route::resource('/languages', 'Zenbolt\Cms\Controllers\LanguaguesController');

    // Cms Pages managment routes
    Route::get('/cms-pages/icons', 'Zenbolt\Cms\Controllers\CmsPagesController@icons');
    Route::get('/cms-pages/order', 'Zenbolt\Cms\Controllers\CmsPagesController@orderIndex');
    Route::get('/cms-pages', 'Zenbolt\Cms\Controllers\CmsPagesController@index');
    Route::get('/cms-pages/order', 'Zenbolt\Cms\Controllers\CmsPagesController@order');
    Route::get('/cms-pages/create', 'Zenbolt\Cms\Controllers\CmsPagesController@create');
    Route::get('/cms-pages/create/custom', 'Zenbolt\Cms\Controllers\CmsPagesController@createCustom');
    Route::get('/cms-pages/{id}/edit', 'Zenbolt\Cms\Controllers\CmsPagesController@edit');
    Route::get('/cms-pages/custom/{id}/edit', 'Zenbolt\Cms\Controllers\CmsPagesController@editCustom');
    Route::post('/cms-pages/order', 'Zenbolt\Cms\Controllers\CmsPagesController@orderSubmit');
    Route::post('/cms-pages', 'Zenbolt\Cms\Controllers\CmsPagesController@store');
    Route::post('/cms-pages/custom', 'Zenbolt\Cms\Controllers\CmsPagesController@storeCustom');
    Route::post('/cms-pages/order', 'Zenbolt\Cms\Controllers\CmsPagesController@changeOrder');
    Route::put('/cms-pages/{id}', 'Zenbolt\Cms\Controllers\CmsPagesController@update');
    Route::put('/cms-pages/custom/{id}', 'Zenbolt\Cms\Controllers\CmsPagesController@updateCustom');
    Route::delete('/cms-pages/{id}', 'Zenbolt\Cms\Controllers\CmsPagesController@destroy');
    Route::post('/ckeditor/images', 'Zenbolt\Cms\Controllers\CmsPageController@uploadCkeditorImages')->name('ckeditor-images');

    //Logs
    Route::get('/logs', 'Zenbolt\Cms\Controllers\CmsLogsController@index');

    // Cms Pages routes
    foreach (\Zenbolt\Cms\Models\CmsPage::where('custom_page', 0)->get() as $cms_page) {
        Route::get('/' . $cms_page->route, 'Zenbolt\Cms\Controllers\CmsPageController@index')->defaults('route', $cms_page->route);
        Route::get('/' . $cms_page->route . '/order', 'Zenbolt\Cms\Controllers\CmsPageController@order')->defaults('route', $cms_page->route);
        Route::get('/' . $cms_page->route . '/create', 'Zenbolt\Cms\Controllers\CmsPageController@create')->defaults('route', $cms_page->route);
        Route::get('/' . $cms_page->route . '/{id}', 'Zenbolt\Cms\Controllers\CmsPageController@show')->defaults('route', $cms_page->route);
        Route::get('/' . $cms_page->route . '/{id}/edit', 'Zenbolt\Cms\Controllers\CmsPageController@edit')->defaults('route', $cms_page->route);

        Route::post('/' . $cms_page->route, 'Zenbolt\Cms\Controllers\CmsPageController@store')->defaults('route', $cms_page->route);
        Route::put('/' . $cms_page->route . '/order', 'Zenbolt\Cms\Controllers\CmsPageController@changeOrder')->defaults('route', $cms_page->route);
        Route::put('/' . $cms_page->route . '/{id}', 'Zenbolt\Cms\Controllers\CmsPageController@update')->defaults('route', $cms_page->route);
        // Both routes are the same but have different method for roles purposes
        Route::post('/' . $cms_page->route . '/edit/images', 'Zenbolt\Cms\Controllers\CmsPageController@uploadImages')->defaults('route', $cms_page->route);
        Route::put('/' . $cms_page->route . '/edit/images', 'Zenbolt\Cms\Controllers\CmsPageController@uploadImages')->defaults('route', $cms_page->route);
        Route::delete('/' . $cms_page->route . '/{id}', 'Zenbolt\Cms\Controllers\CmsPageController@destroy')->defaults('route', $cms_page->route);
    }
});

/*
|--------------------------------------------------------------------------
| APIs
|--------------------------------------------------------------------------
*/

Route::prefix(config('zenbolt.api_route_prefix'))->middleware(['api'])->group(function () {
    foreach (\Zenbolt\Cms\Models\CmsPage::where('custom_page', 0)->where('apis', 1)->get() as $cms_page) {
        Route::post('/' . $cms_page->route, 'Zenbolt\Cms\Controllers\ApisController@index')->defaults('route', $cms_page->route);
        Route::post('/' . $cms_page->route . '/{id}', 'Zenbolt\Cms\Controllers\ApisController@single')->defaults('route', $cms_page->route);
    }
});
