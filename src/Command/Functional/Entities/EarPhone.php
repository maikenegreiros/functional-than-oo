<?php
namespace Patterns\Command\Functional\Entities;

class EarPhone {

  private $command;

  public function setCommand(Callable $command): void
  {
    $this->command = $command;
  }

  public function pressButton(): string
  {
    return call_user_func($this->command);
  }

  public function setVolume(int $volume): void
  {
    echo "Volume set to $volume";
  }
}
