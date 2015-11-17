<?php

namespace Context;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Silex\Application;

class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * @var Application
     */
    private $app;

    /**
     * @BeforeScenario
     */
    public function buildApp()
    {
        $this->app = require __DIR__ . '/../AppDev.php';
    }
}
