<?php

declare(strict_types=1);

namespace App\Factory;

interface LoggerFactory
{
    public function createLogger(): Logger;
}
