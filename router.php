<?php
//$request = $_SERVER['REQUEST_URI'];
$urlpath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Reqex to match everything until .php or ?
$regex = '/.+?(?=.php|\?)/';

// Apply regex to request ($parsedRequest in the result)
preg_match($regex, $urlpath, $parsedRequest);

$toCheck;
if (isset($parsedRequest[0])) {
    $toCheck = $parsedRequest[0];
} else {
    $toCheck = $urlpath;
}

$view = match ($toCheck) {
    '' => '/view/home.php',
    '/' => '/view/home.php',
    '/home' => '/view/home.php',
    '/event' => '/view/event.php',
    '/news' => '/view/news.php',
    '/photo' => '/view/photo.php',
    '/contact' => '/view/contact.php',
    '/article' => '/view/article.php',
    '/addArticle' => '/view/addArticle.php',
    default => null
};

if ($view !== null) {
    require __DIR__ . $view;
} else {
    require __DIR__ . '/view/404.php';
}