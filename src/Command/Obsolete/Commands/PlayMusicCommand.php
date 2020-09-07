<?php
namespace Patterns\Command\Obsolete\Commands;

class PlayMusicCommand implements Command
{
  public function run(): string
  {
    return "Playing music";
  }
}
