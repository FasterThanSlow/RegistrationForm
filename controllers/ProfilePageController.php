<?php

require_once 'PageController.php';
require_once 'models/UserDataBaseModel.php';

class ProfilePageController extends PageController {

    protected function getMiddle($smarty) {
        if (isset($_SESSION['login'])) {
            $userModel = new UserDataBaseModel($this->databaseController);
            $user = $userModel->selectUserByLogin($_SESSION["login"]);
            $smarty->assign('login', $user->getLogin());
            $smarty->assign('name', $user->getName());
            $smarty->assign('email', $user->getEmail());
            if (!empty($user->getAvatar())) {
                $smarty->assign('avatar', $user->getAvatar());
            }
            $smarty->assign($this->localArr);
            return $smarty->fetch('profile.tpl');
        } else {
            return $smarty->fetch('error.tpl');
        }
    }

}
