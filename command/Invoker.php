<?php

namespace App\Command;

use \App\Command\Command;

class Invoker
{

    private static $instance = false;

    private $commandList = array();

    private function __construct()
    {

    }

    public function execute(Command $command)
    {

        array_push($this->commandList, $command);

        $command->execute();

        $command->getLog();

    }

    public static function getInstance()
    {

        if (self::$instance === false) {

            self::$instance = new Invoker();

        }

        return self::$instance;

    }

}
