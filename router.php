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

$isAdmin = isset($_SESSION['adminID']);

$view = match ($toCheck) {
    '' => '/view/home.php',
    '/' => '/view/home.php',
    '/home' => '/view/home.php',
    '/event' => '/view/event.php',
    '/news' => '/view/news.php',
    '/photo' => '/view/photo.php',
    '/contact' => '/view/contact.php',
    '/article' => '/view/article.php',
    '/login' => '/view/login.php',
    '/logout' => '/View/_partials/logout.php',

    default => null
};

if ($view == null && $isAdmin) {
    $view = match ($toCheck) {
        '/admin-panel' => '/view/adminPanel.php',
        '/admin-profile' => '/view/adminProfile.php',
        '/admin-event' => '/view/adminEvent.php',
        '/admin-photo' => '/view/adminPhoto.php',
        '/admin-article' => '/view/adminArticles.php',
        '/add-article' => '/view/addArticle.php',
        '/edit-article' => '/view/editArticle.php',
        '/admin-mail' => '/view/adminMail.php',
        '/mail' => '/view/mail.php',
        '/signup' => '/view/signup.php',

        default => null
    };
}

if ($view !== null) {
    require __DIR__ . $view;
} else {
    require __DIR__ . '/view/404.php';
}