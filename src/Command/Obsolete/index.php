<?php
use Patterns\Command\Obsolete\Entities\EarPhone;
use Patterns\Command\Obsolete\Commands\AnswerCallCommand;
use Patterns\Command\Obsolete\Commands\PlayMusicCommand;

$remoteControl = new EarPhone;
$answerCall = new AnswerCallCommand;
$playMusic = new PlayMusicCommand;

$remoteControl->setCommand($answerCall);
$remoteControl->pressButton();

$remoteControl->setCommand($playMusic);
$remoteControl->pressButton();
