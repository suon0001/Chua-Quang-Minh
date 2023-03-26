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
        '/admin-panel' => '/view/admin/adminPanel.php',
        '/admin-profile' => '/view/admin/adminProfile.php',
        '/admin-event' => '/view/admin/adminEvent.php',
        '/add-event' => '/view/admin/addEvent.php',
        '/edit-event' => '/view/admin/editEvent.php',
        '/admin-photo' => '/view/admin/adminPhoto.php',
        '/admin-article' => '/view/admin/adminArticles.php',
        '/add-article' => '/view/admin/addArticle.php',
        '/edit-article' => '/view/admin/editArticle.php',
        '/admin-mail' => '/view/admin/adminMail.php',
        '/mail' => '/view/admin/mail.php',
        '/admin-donation' => '/view/admin/adminDonation.php',
        '/admin-member' => '/view/admin/member.php',
        '/admin-setting' => '/view/admin/setting.php',

        default => null
    };
}

if ($view !== null) {
    require __DIR__ . $view;
} else {
    require __DIR__ . '/view/404.php';
}