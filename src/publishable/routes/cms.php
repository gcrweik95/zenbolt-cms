<?php

/*
|--------------------------------------------------------------------------
| CMS generated routes for signed in admins
|--------------------------------------------------------------------------
*/

Route::prefix(config('zenbolt.cms_route_prefix'))->middleware(['admin'])->group(function () {

    /* Start admin route group */



    /* End admin route group */
});
