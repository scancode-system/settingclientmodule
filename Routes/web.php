<?php

Route::prefix('settingclient')->group(function() {
	Route::put('{setting_client}', 'SettingClientController@update')->name('settingclient.update');
});
