<?php

Route::namespace('Core\Post\Controllers\Web')->prefix('admin')->name('admin.')->group(function () {
    #*** Ex: START: Post ***#
    // Route::resource('posts', 'PostController')->except([
    //    'store', 'update', 'destroy'
    // ]);
    #*** END: Post ***#
});
