<?php

declare(strict_types=1);

namespace Roxblnfk\CliTube\Contract\Command;

use Psr\EventDispatcher\StoppableEventInterface;

interface UserCommand extends Command, StoppableEventInterface
{
    public static function createFromInput(string $input): ?UserCommand;
}
