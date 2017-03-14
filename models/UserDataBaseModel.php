<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDataBaseModel
 *
 * @author Vadim
 */
require_once 'User.php';
require_once 'config.php';

class UserDataBaseModel {

    private $table_name;
    private $database_controller;

    function __construct($database_controller) {
        $this->database_controller = $database_controller;
        $this->table_name = "users";
    }

    public function addUser(User $user) {
        return $this->database_controller->insert($this->table_name, User::getColumnNames(), $user->getValues());
    }

    public function selectUserById(int $id) {
        $data = $this->database_controller->select($this->table_name, User::getColumnNames(), "id=" . $id);
        $row = @mysqli_fetch_assoc($data);
        return User::rowToUser($row);
    }

    public function checkUser($login, $password) {
        $user = $this->selectUserByLogin($login);
        if (!$user)
            return 0;
        if ($user->getPassword() !== sha1($GLOBALS['CONFIG']["salt"] . $password)) {
            return -1;
        } else {
            return 1;
        }
    }

    public function selectUserByLogin(string $login) {
        $data = $this->database_controller->select($this->table_name, User::getColumnNames(), "login='" . $login . "'");
        $row = @mysqli_fetch_assoc($data);
        if ($row) {
            return User::rowToUser($row);
        } else {
            return false;
        }
    }

    public function selectUserByEmail(string $email) {
        $data = $this->database_controller->select($this->table_name, User::getColumnNames(), "email='" . $email . "'");
        $row = @mysqli_fetch_assoc($data);
        if ($row) {
            return User::rowToUser($row);
        } else {
            return false;
        }
    }

}
