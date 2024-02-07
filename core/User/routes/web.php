<?php

Route::namespace('Core\User\Controllers\Web')->prefix('admin')->name('admin.')->group(function () {
    #*** Ex: START: User ***#
    // Route::resource('users', 'UserController')->except([
    //    'store', 'update', 'destroy'
    // ]);
    #*** END: User ***#
});
