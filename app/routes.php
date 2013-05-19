<?php

Route::group(array('prefix' => 'api/v1'), function() {
  Route::resource('user', 'UserController');
});
