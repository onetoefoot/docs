<?php
Route::get('docs', function () {
    return view('docs::index');
});

Route::get('{slug}', 'Onetoefoot\\Docs\\Controllers\\DocController@page')->where('slug', '(.*)');

// Route::prefix('/docs/tasks')->group(function () {
//     Route::get('/', function () {
//         return redirect('tasks/v1/introduction');
//     });
// });
// Route::get('/docs/tasks', function () {
//     return view('docs::tasks/index');
// });
//     Route::get('/docs/tasks/v1/introduction', function () {
//         return view('docs::tasks/v1/introduction');
//     });
//     Route::get('/docs/tasks/v1/requirements', function () {
//         return view('docs::tasks/v1/requirements');
//     });
//     Route::get('/docs/tasks/v1/installation-setup', function () {
//         return view('docs::tasks/v1/installation-setup');
//     });
//     Route::get('/docs/tasks/v1/questions-issues', function () {
//         return view('docs::tasks/v1/questions-issues');
//     });
//     Route::get('/docs/tasks/v1/introduction', function () {
//         return view('docs::tasks/v1/changelog');
//     });

// Route::get('/docs/docs', function () {
//     return view('docs::docs/index');
// });
// Route::get('/docs/sampleidentifier', function () {
//     return view('docs::sampleidentifier/index');
// });