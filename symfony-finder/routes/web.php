<?php

use Symfony\Component\Finder\Finder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $files = Finder::create()
        ->in(app_path())
        ->name('*.txt')
        ->contains('{example-key}');

    foreach($files as $file) {
        // var_dump($file->getRealPath());

        $contents = File::get($file->getRealPath());

        // var_dump($contents);

        $updated = str_replace('{example-key}', 'UPDATED!!!', $contents);

        File::put($file->getRealPath(), $updated);

    }
});
