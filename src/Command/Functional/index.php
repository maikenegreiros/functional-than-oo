<?php
use Patterns\Command\Functional\Entities\EarPhone;

$remoteControl = new EarPhoneWithFunctional;
$answerCall = fn () => 'Answering Call';
$playMusic = fn () => 'Playing music';

$remoteControl->setCommand($answerCall);
$remoteControl->pressButton();

$remoteControl->setCommand($playMusic);
$remoteControl->pressButton();
