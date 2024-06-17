<?php
declare(strict_types=1);

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['username']) ? $_POST['username'] : '';
    if ($name !== '') {
        $_SESSION['username'] = $name;    }
}
header('Location: index.php');
