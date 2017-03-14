<?php
/**
 * Description of RegisterPageController
 *
 * @author Vadim
 */
require_once 'PageController.php';

class RegistrationPageController extends PageController {

    protected function getMiddle($smarty) {
        $smarty->assign($this->localArr);
        if (isset($_GET["error"])) {
            global $ERRORS_LOCAL;
            $smarty->assign('error_display', 'block');
            $smarty->assign('error_title', $ERRORS_LOCAL["error_{$_GET["error"]}"]);
        }
        return $smarty->fetch('sign_up.tpl');
    }

}
