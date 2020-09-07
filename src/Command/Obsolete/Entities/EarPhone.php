<?php
namespace Patterns\Command\Obsolete\Entities;

use Patterns\Command\Obsolete\Commands\Command;

class EarPhone {

  private Command $command;

  public function setCommand(Command $command): void
  {
    $this->command = $command;
  }

  public function pressButton(): string
  {
    return $this->command->run();
  }

  public function setVolume(int $volume): void
  {
    echo "Volume set to $volume";
  }
}
