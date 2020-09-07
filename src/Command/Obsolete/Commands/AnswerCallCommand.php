<?php
namespace Patterns\Command\Obsolete\Commands;

class AnswerCallCommand implements Command
{
  public function run(): string
  {
    return "Answering Call";
  }
}
