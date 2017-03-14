<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author Vadim
 */
class User {

    private $login;
    private $password;
    private $email;
    private $name;
    private $avatar;
    public static $column_login = "login";
    public static $column_password = "password";
    public static $column_email = "email";
    public static $column_name = "name";
    public static $column_avatar = "avatar";

    function __construct($login, $password, $email, $name, $avatar = "") {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
        $this->avatar = $avatar;
    }

    public static function rowToUser($row) {
        $login = $row["" . User::$column_login . ""];
        $password = $row["" . User::$column_password . ""];
        $email = $row["" . User::$column_email . ""];
        $name = $row["" . User::$column_name . ""];
        $avatar = $row["" . User::$column_avatar . ""];
        return new User($login, $password, $email, $name, $avatar);
    }

    public static function getColumnNames() {
        return array(User::$column_login, User::$column_password, User::$column_email, User::$column_name, User::$column_avatar);
    }

    public function getValues() {
        return array($this->login, $this->password, $this->email, $this->name, $this->avatar);
    }

    public function editUser($newLogin, $newPassword, $newEmail, $newName, $newAvatar = "") {
        $this->login = $newLogin;
        $this->password = $newPassword;
        $this->email = $newEmail;
        $this->name = $newName;
        $this->avatar = $newAvatar;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

}
