<?php
session_start();

$_SESSION['language'] = "es";

if (isset($_SESSION['user'])) {
    header("Location: /list/user/");
} else {
    header("Location: /login/");
}
