<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'models/UserDataBaseModel.php';
require_once 'models/DataBaseModel.php';
require_once 'config.php';

$dataBaseModel = new DataBaseModel(
        $GLOBALS['CONFIG']['dbHost'], $GLOBALS['CONFIG']['dbUser'], $GLOBALS['CONFIG']['dbPassword'], $GLOBALS['CONFIG']['dbName']
);

$userDataBaseModel = new UserDataBaseModel($dataBaseModel);
session_start();
$link = $_SERVER["HTTP_REFERER"];

if (isset($_POST["authorization"])) {
    $login = trim($_POST["login"]);
    $password = trim($_POST["password"]);
    $code = $userDataBaseModel->checkUser($login, $password);
    if ($code == 1) {
        $_SESSION["login"] = $login;
        $_SESSION["password"] = $password;
        $link = "index.php?view=profile";
    } elseif ($code == 0) {
        $link = "index.php?view=auth&error=1";
    } elseif ($code == -1) {
        $link = "index.php?view=auth&error=2";
    }
    header("Location: {$link}");
    exit;
}

if (isset($_GET["logout"])) {
    unset($_SESSION["login"]);
    unset($_SESSION["password"]);
    header("Location: index.php");
    exit;
}

if (isset($_GET["lang"])) {
    $_SESSION["lang"] = $_GET["lang"];
    header("Location: $link");
}

if (isset($_POST["regestration"])) {
    $login = trim($_POST["login"]);
    if ($userDataBaseModel->selectUserByLogin($login)) {
        header("Location: index.php?view=reg&error=3");
        exit;
    }
    $password = sha1($GLOBALS['CONFIG']["salt"] . trim($_POST["password"]));
    $confirm = sha1($GLOBALS['CONFIG']["salt"] . trim($_POST["confirm_pass"]));

    if ($password != $confirm) {
        header("Location: index.php?view=reg&error=7");
        exit;
    }

    $email = trim($_POST["email"]);
    if ($userDataBaseModel->selectUserByEmail($email)) {
        header("Location: index.php?view=reg&error=4");
        exit;
    }
    $name = trim($_POST["name"]);

    if ($_FILES['avatar']['error'] == 4) {
        $user = new User($login, $password, $email, $name);
        $userDataBaseModel->addUser($user);
        $link = 'index.php';
        header("Location: $link");
        exit;
    }
    $uploaddir = 'images/avatars/';
    $filePath = $uploaddir . basename($_FILES['avatar']['name']);
    $uploadfile = $uploaddir . iconv(mb_detect_encoding(basename($_FILES['avatar']['name'])), 'windows-1251', basename($_FILES['avatar']['name']));
    if ($_FILES['avatar']['type'] == 'image/png' || $_FILES['avatar']['type'] == 'image/jpg' || $_FILES['avatar']['type'] == 'image/gif') {
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)) {
            $user = new User($login, $password, $email, $name, $filePath);
            $userDataBaseModel->addUser($user);
            $link = 'index.php';
        } else {
            $link = "index.php?view=reg&error=6";
        }
    } else {
        $link = "index.php?view=reg&error=5";
    }
    header("Location: $link");
    exit;
}