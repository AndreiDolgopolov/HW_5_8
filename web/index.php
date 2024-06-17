<?php
declare(strict_types=1);

session_start();

if (isset($_SESSION['username'])) {
    echo 'Приветствую тебя ' . $_SESSION['username'] . PHP_EOL;
    include 'exit_link.php';
} else {
    include 'form.php';
}
