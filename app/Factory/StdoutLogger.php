<?php

declare(strict_types=1);

namespace App\Factory;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}
