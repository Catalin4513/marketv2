<?php

namespace Web7\Market\Task;

class MyTask extends \TYPO3\CMS\Scheduler\Task\AbstractTask {
    public function execute() {
           echo("HelloWrld!");
    }


}