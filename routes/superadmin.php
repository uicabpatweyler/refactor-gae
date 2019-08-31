<?php
/* app/Providers/RouteServiceProvider.php */
/* mapSuperAdminRoutes() */
Route::get('user-roles','SuperAdmin\RoleAppController@index')
  ->name('user-roles.index');
Route::get('user-roles/create','SuperAdmin\RoleAppController@create')
  ->name('user-roles.create');
Route::get('user-roles/{roleApp}','SuperAdmin\RoleAppController@show')
  ->name('user-roles.show');
Route::get('user-roles/{roleApp}/edit','SuperAdmin\RoleAppController@edit')
  ->name('user-roles.edit');
Route::patch('user-roles/{roleApp}','SuperAdmin\RoleAppController@update')
  ->name('user-roles.update');