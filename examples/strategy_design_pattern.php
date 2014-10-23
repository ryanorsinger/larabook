<?php

interface Logger {
    // All implementations of this interface must have a log() as part of the "contract"
    public function log($data);
}

class LogToFile implements Logger {
    public function log($data)
    {
        var_dump('Log the data to a file');
    }
}

class LogToDatabase implements Logger {
    public function log($data)
    {
        var_dump('Log the data to a database');
    }
}

class LogToWebService implements Logger {
    public function log($data)
    {
        var_dump('Log the data to a web service');
    }
}

class App {

    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;
        $logger->log($data);
    }
}

$app = new App;
$app->log('We want to depend on abstractions rather than concretions');
$app->log('We want to depend on abstractions rather than concretions', new LogToDatabase);
$app->log('We want to depend on abstractions rather than concretions', new LogToWebService);
