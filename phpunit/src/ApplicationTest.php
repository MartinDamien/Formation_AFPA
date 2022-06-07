<?php
require 'Logger.php';
require 'Application.php';

class ApplicationTest extends \PHPUnit\Framework\TestCase
{

  public function testThatRunLogsApplicationStart()
  {

    // create the observer
    $mock = $this->createMock(Logger::class);
    $mock->expects($this->once())
      ->method('log')
      ->with('Application has started');

    // run the application with the observer which ensures the log method was called
    $app = new Application();
    $app->run($mock);
  }
}
