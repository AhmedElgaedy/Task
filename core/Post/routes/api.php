<?php

Route::group(['prefix' => 'api', 'middleware' => []], function () {
    # V1
    Route::namespace('Core\Post\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        #*** Ex: START: Post ***#
        // Route::apiResource('posts', 'PostController');
        #*** END: Post ***#
    });
});
