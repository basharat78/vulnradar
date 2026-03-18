<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('sites');
});

$pages = ['api', 'billing', 'findings', 'monitoring', 'reports', 'scans', 'sites', 'team', 'dashboard', 'settings'];

foreach ($pages as $page) {
    Route::view('/' . $page, $page)->name($page);
}
