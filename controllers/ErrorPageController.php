<?php

/**
 * Description of ErrorPageController
 *
 * @author Vadim
 */
class ErrorPageController extends PageController {

    protected function getMiddle($smarty) {
        return $smarty->fetch('error.tpl');
    }

}
