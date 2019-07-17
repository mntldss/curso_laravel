<?php

Route::get('/','PagesController@inicio')->name('home');

Route::get('/detalle/{id}','PagesController@detalle')->name('notas.detalle');

Route::post('/','PagesController@crear')->name('notas.crear');

Route::get('/editar/{id}','PagesController@editar')->name('notas.editar');

Route::put('/editar/{id}','PagesController@update')->name('notas.update');

Route::delete('/eliminar/{id}','PagesController@eliminar')->name('notas.eliminar');

Route::get('/fotos', 'PagesController@fotos')->name('fotos');

Route::get('/blog', 'PagesController@blog')->name('blog');

Route::get('/nosotros/{nombre?}','PagesController@nosotros')->name('nosotros');