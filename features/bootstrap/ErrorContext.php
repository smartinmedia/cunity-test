<?php

use Behat\Mink\Driver\Selenium2Driver;
use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Class ErrorContext
 */
class ErrorContext extends RawMinkContext
{

    /**
     * Take screenshot when step fails.
     * Works only with Selenium2Driver.
     *
     * @AfterStep
     * @param $event
     */
    public function takeScreenshotAfterFailedStep($event)
    {
        /** @var $driver Selenium2Driver */
        $driver = $this->getSession()->getDriver();

        if (($driver instanceof Selenium2Driver) && 4 === $event->getResult() && FeatureContext::TAKE_SCREENSHOTS_ON_ERROR) {
            $directory = 'C:/xampp/htdocs/cunity-test/screenshots/'
                . $event->getLogicalParent()->getFeature()->getTitle()
                . '.'
                . $event->getLogicalParent()->getTitle();

            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }

            $filename = sprintf(
                '%s_%s',
                $this->getMinkParameter('browser_name'),
                date('H-i-s_d-m-Y')
            );
            $file = $directory
                . '/'
                . str_replace('.', '_', $filename)
                . '.png';
            $handle = fopen($file, 'w');
            sleep(FeatureContext::WAIT_TIMEOUT);
            fwrite($handle, $driver->getScreenshot());
        }
    }
}
