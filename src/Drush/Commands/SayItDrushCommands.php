<?php

namespace Say\Hello\Drush\Commands;

use Drush\Commands\DrushCommands;

class SayItDrushCommands extends DrushCommands
{
    /**
     * @command say:hello
     */
    public function sayHello(): void
    {
        $this->yell('Hello!');
    }
}
