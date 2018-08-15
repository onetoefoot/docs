<?php
Route::get('docs', function () {
    return view('docs::index');
});
// Route::prefix('/docs/task')->group(function () {
//     Route::get('/', function () {
//         return redirect('/docs/task/v1/introduction');
//     });
//     Route::get('v1', function () {
//         return redirect('/docs/task/v1/introduction');
//     });
//     Route::get('v2', function () {
//         return redirect('/docs/task/v2/introduction');
//     });
// });
Route::get('/docs/{slug}', 'Onetoefoot\\Docs\\Controllers\\DocController@page')->where('slug', '(.*)');
