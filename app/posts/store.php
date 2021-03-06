<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

if (isset($_POST['new-title'], $_POST['new-url'], $_POST['new-description'])) {
    $userid = $_SESSION['user']['id'];
    $title = filter_var($_POST['new-title'], FILTER_SANITIZE_STRING);
    $link = filter_var($_POST['new-url'], FILTER_SANITIZE_URL);
    $description = filter_var($_POST['new-description'], FILTER_SANITIZE_STRING);
    $date = date('Y-m-d h:m');
    $author = $_SESSION['user']['username'];

    createPost($database, $userid, $title, $link, $description, $date, $author);
    $_SESSION['success'] = "Your post was created!";
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
