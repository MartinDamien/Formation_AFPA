<?php
class Application
{
    public function run(Logger $logger)
    {
        // some code that starts up the application

        // send out a log that the application has started
        $logger->log('Application has started');
    }
}
