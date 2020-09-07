<?php
use PHPUnit\Framework\TestCase;
use Patterns\Command\Obsolete\Entities\EarPhone as EarPhoneInCommandPattern;
use Patterns\Command\Obsolete\Commands\AnswerCallCommand;
use Patterns\Command\Obsolete\Commands\PlayMusicCommand;

use Patterns\Command\Functional\Entities\EarPhone as EarPhoneWithFunctional;

class EarPhoneButtonPresserTest extends TestCase {

  public function testObsoletePattern()
  {
    $remoteControl = new EarPhoneInCommandPattern;
    $answerCall = new AnswerCallCommand;
    $playMusic = new PlayMusicCommand;

    $remoteControl->setCommand($answerCall);
    $this->assertEquals('Answering Call', $remoteControl->pressButton());

    $remoteControl->setCommand($playMusic);
    $this->assertEquals('Playing music', $remoteControl->pressButton());
  }

  public function testWithFunctionalFeature()
  {
    $remoteControl = new EarPhoneWithFunctional;
    $answerCall = fn () => 'Answering Call';
    $playMusic = fn () => 'Playing music';

    $remoteControl->setCommand($answerCall);
    $this->assertEquals('Answering Call', $remoteControl->pressButton());

    $remoteControl->setCommand($playMusic);
    $this->assertEquals('Playing music', $remoteControl->pressButton());
  }
}
