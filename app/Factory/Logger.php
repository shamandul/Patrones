<?php

declare(strict_types=1);

namespace App\Factory;

interface Logger
{
    public function log(string $message);
}
