<?php
/**
 * Description of PageController
 *
 * @author Vadim
 *
 */
abstract class PageController {

    protected $databaseController;
    protected $smarty;
    protected $localArr;

    public function __construct($databaseController, $localArr) {
        $this->smarty = new Smarty();
        $this->databaseController = $databaseController;
        $this->localArr = $localArr;
    }

    public function getContent() {
        if (isset($_SESSION["lang"])) {
            $this->smarty->assign("{$_SESSION["lang"]}_active", "active");
        }
        $this->smarty->assign('title', $this->getTitle($this->smarty));
        $this->smarty->assign('middle', $this->getMiddle($this->smarty));
        $this->smarty->display('main.tpl');
    }

    protected function getTitle() {
        return "Registration Form";
    }

    protected abstract function getMiddle($smarty);
}
