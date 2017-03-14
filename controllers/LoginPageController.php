<?php
/**
 * Description of LoginPageController
 *
 * @author Vadim
 */
require_once 'PageController.php';

class LoginPageController extends PageController {

    protected function getMiddle($smarty) {
        $smarty->assign($this->localArr);
        if (isset($_GET["error"])) {
            global $ERRORS_LOCAL;
            $smarty->assign('error_display', 'block');
            switch ($_GET["error"]) {
                case 1:
                    $smarty->assign('error_title', $ERRORS_LOCAL["error_1"]);
                    break;
                case 2:
                    $smarty->assign('error_title', $ERRORS_LOCAL["error_2"]);
                    break;
            }
        }
        return $smarty->fetch('sign_in.tpl');
    }

}
