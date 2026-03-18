<?php

$dir = __DIR__ . '/public';
$files = glob($dir . '/vulnradar-*.html');

foreach ($files as $file) {
    if (basename($file) == 'vulnradar-dashboard.html') continue;
    echo "Processing " . basename($file) . "\n";
    $content = file_get_contents($file);

    // Extract title
    preg_match('/<div class="topbar-title">(.*?)<\/div>/s', $content, $m);
    $titleFull = $m[1] ?? 'Title';
    
    $title = 'Dashboard';
    $subtitle = '';
    if (preg_match('/^(.*?)<span>(.*?)<\/span>$/s', trim($titleFull), $m2)) {
        $title = trim($m2[1]);
        $subtitle = trim($m2[2]);
    } else {
        $title = trim($titleFull);
    }

    // Extract topbar-actions
    preg_match('/<div class="icon-btn">.*?<\/div>\s*(.*?)\s*<\/div>\s*<\/header>/s', $content, $m3);
    $actions = trim($m3[1] ?? '');

    // Extract main page content
    preg_match('/<main class="page">(.*?)<\/main>/s', $content, $m4);
    $pageContent = trim($m4[1] ?? '');

    $blade = "@extends('layouts.app')\n\n";
    $blade .= "@section('title', '$title')\n";
    if ($subtitle) {
        $blade .= "@section('subtitle', '$subtitle')\n";
    }

    if ($actions) {
        $blade .= "\n@section('topbar-actions')\n$actions\n@endsection\n";
    }

    $blade .= "\n@section('content')\n$pageContent\n@endsection\n";

    $viewName = str_replace(['vulnradar-', '.html'], '', basename($file));
    file_put_contents(__DIR__ . "/resources/views/{$viewName}.blade.php", $blade);
}

// Create placeholder views for dashboard and settings
$dummyPages = ['dashboard', 'settings'];
foreach ($dummyPages as $page) {
    if (!file_exists(__DIR__ . "/resources/views/{$page}.blade.php")) {
        $title = ucfirst($page);
        $blade = "@extends('layouts.app')\n\n@section('title', '$title')\n\n@section('content')\n<div class=\"empty-state\">\n\t<h3>$title Page</h3>\n\t<p>This page has not been built yet.</p>\n</div>\n@endsection\n";
        file_put_contents(__DIR__ . "/resources/views/{$page}.blade.php", $blade);
    }
}
echo "Done.\n";
