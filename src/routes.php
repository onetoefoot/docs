<?php
Route::get('docs', function () {
    return view('docs::index');
});

Route::get('/docs/{slug}', 'Onetoefoot\\Docs\\Controllers\\DocController@page')->where('slug', '(.*)');
