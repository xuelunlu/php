<?php

namespace App\Command;

interface Command
{

    public function execute();

    public function getLog();

}
