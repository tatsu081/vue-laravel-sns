<?php

Auth::routes();
Route::get('/', 'ArticleController@index')->name('articles.index'); //-- この行を編集
Route::resource('/articles', 'ArticleController')->except(['index'])->middleware('auth'); //-- この行を編集
