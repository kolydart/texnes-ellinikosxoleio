<?php
// Route::get('/', function () { return redirect('/admin/home'); })->middleware('backend');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

// Registration Routes..
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');
Route::post('register', 'Auth\RegisterController@register')->name('auth.register');

// Admin 
Route::group(['middleware' => ['backend','auth','approved'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'home']);
    Route::get('/reports/fullpaper-uploads', 'Admin\ReportsController@fullpaperUploads');
    Route::get('/reports/user-registrations', 'Admin\ReportsController@userRegistrations');

    Route::get('/calendar', 'Admin\SystemCalendarController@index'); 
  
    Route::resource('sessions', 'Admin\SessionsController');
    Route::post('sessions_mass_destroy', ['uses' => 'Admin\SessionsController@massDestroy', 'as' => 'sessions.mass_destroy']);
    Route::post('sessions_restore/{id}', ['uses' => 'Admin\SessionsController@restore', 'as' => 'sessions.restore']);
    Route::delete('sessions_perma_del/{id}', ['uses' => 'Admin\SessionsController@perma_del', 'as' => 'sessions.perma_del']);
    Route::resource('rooms', 'Admin\RoomsController');
    Route::post('rooms_mass_destroy', ['uses' => 'Admin\RoomsController@massDestroy', 'as' => 'rooms.mass_destroy']);
    Route::post('rooms_restore/{id}', ['uses' => 'Admin\RoomsController@restore', 'as' => 'rooms.restore']);
    Route::delete('rooms_perma_del/{id}', ['uses' => 'Admin\RoomsController@perma_del', 'as' => 'rooms.perma_del']);
    Route::resource('papers', 'Admin\PapersController');
    Route::post('papers_mass_destroy', ['uses' => 'Admin\PapersController@massDestroy', 'as' => 'papers.mass_destroy']);
    Route::post('papers_restore/{id}', ['uses' => 'Admin\PapersController@restore', 'as' => 'papers.restore']);
    Route::delete('papers_perma_del/{id}', ['uses' => 'Admin\PapersController@perma_del', 'as' => 'papers.perma_del']);
    Route::resource('fullpapers', 'Admin\FullpapersController');
    Route::post('fullpapers_mass_destroy', ['uses' => 'Admin\FullpapersController@massDestroy', 'as' => 'fullpapers.mass_destroy']);
    Route::post('fullpapers_restore/{id}', ['uses' => 'Admin\FullpapersController@restore', 'as' => 'fullpapers.restore']);
    Route::delete('fullpapers_perma_del/{id}', ['uses' => 'Admin\FullpapersController@perma_del', 'as' => 'fullpapers.perma_del']);
    Route::resource('arts', 'Admin\ArtsController');
    Route::post('arts_mass_destroy', ['uses' => 'Admin\ArtsController@massDestroy', 'as' => 'arts.mass_destroy']);
    Route::post('arts_restore/{id}', ['uses' => 'Admin\ArtsController@restore', 'as' => 'arts.restore']);
    Route::delete('arts_perma_del/{id}', ['uses' => 'Admin\ArtsController@perma_del', 'as' => 'arts.perma_del']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('reviews', 'Admin\ReviewsController');
    Route::post('reviews_mass_destroy', ['uses' => 'Admin\ReviewsController@massDestroy', 'as' => 'reviews.mass_destroy']);
    Route::post('reviews_restore/{id}', ['uses' => 'Admin\ReviewsController@restore', 'as' => 'reviews.restore']);
    Route::delete('reviews_perma_del/{id}', ['uses' => 'Admin\ReviewsController@perma_del', 'as' => 'reviews.perma_del']);
    Route::resource('content_pages', 'Admin\ContentPagesController');
    Route::post('content_pages_mass_destroy', ['uses' => 'Admin\ContentPagesController@massDestroy', 'as' => 'content_pages.mass_destroy']);
    Route::resource('content_categories', 'Admin\ContentCategoriesController');
    Route::post('content_categories_mass_destroy', ['uses' => 'Admin\ContentCategoriesController@massDestroy', 'as' => 'content_categories.mass_destroy']);
    Route::resource('content_tags', 'Admin\ContentTagsController');
    Route::post('content_tags_mass_destroy', ['uses' => 'Admin\ContentTagsController@massDestroy', 'as' => 'content_tags.mass_destroy']);
    Route::resource('lunches', 'Admin\LunchesController');
    Route::post('lunches_mass_destroy', ['uses' => 'Admin\LunchesController@massDestroy', 'as' => 'lunches.mass_destroy']);
    Route::post('lunches_restore/{id}', ['uses' => 'Admin\LunchesController@restore', 'as' => 'lunches.restore']);
    Route::delete('lunches_perma_del/{id}', ['uses' => 'Admin\LunchesController@perma_del', 'as' => 'lunches.perma_del']);
    Route::resource('availabilities', 'Admin\AvailabilitiesController');
    Route::post('availabilities_mass_destroy', ['uses' => 'Admin\AvailabilitiesController@massDestroy', 'as' => 'availabilities.mass_destroy']);
    Route::post('availabilities_restore/{id}', ['uses' => 'Admin\AvailabilitiesController@restore', 'as' => 'availabilities.restore']);
    Route::delete('availabilities_perma_del/{id}', ['uses' => 'Admin\AvailabilitiesController@perma_del', 'as' => 'availabilities.perma_del']);
    Route::resource('colors', 'Admin\ColorsController');
    Route::post('colors_mass_destroy', ['uses' => 'Admin\ColorsController@massDestroy', 'as' => 'colors.mass_destroy']);
    Route::post('colors_restore/{id}', ['uses' => 'Admin\ColorsController@restore', 'as' => 'colors.restore']);
    Route::delete('colors_perma_del/{id}', ['uses' => 'Admin\ColorsController@perma_del', 'as' => 'colors.perma_del']);
    Route::resource('messages', 'Admin\MessagesController');
    Route::post('messages_mass_destroy', ['uses' => 'Admin\MessagesController@massDestroy', 'as' => 'messages.mass_destroy']);
    Route::post('messages_restore/{id}', ['uses' => 'Admin\MessagesController@restore', 'as' => 'messages.restore']);
    Route::delete('messages_perma_del/{id}', ['uses' => 'Admin\MessagesController@perma_del', 'as' => 'messages.perma_del']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('activitylogs', 'Admin\ActivitylogsController');
    Route::post('activitylogs_mass_destroy', ['uses' => 'Admin\ActivitylogsController@massDestroy', 'as' => 'activitylogs.mass_destroy']);
    Route::resource('loguseragents', 'Admin\LoguseragentsController');
    Route::post('loguseragents_mass_destroy', ['uses' => 'Admin\LoguseragentsController@massDestroy', 'as' => 'loguseragents.mass_destroy']);
    Route::post('/spatie/media/upload', 'Admin\SpatieMediaController@create')->name('media.upload');
    Route::post('/spatie/media/remove', 'Admin\SpatieMediaController@destroy')->name('media.remove');

    Route::get('/attends/delete/{paper_id}/{user_id}', 'Admin\PapersController@attendsDelete')->name('attends.delete');

    Route::get('/export/labs', 
        function() {
            \Artisan::call('export:labs2file');
            return \File::get(base_path() . '/storage/export/labs.html');
        })->name('export.labs');

 
});

require __DIR__."/gw.php";
