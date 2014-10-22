<?php

use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Class WallContext
 */
class WallContext extends RawMinkContext
{
    /**
     * @When /^I remove wall entries$/
     */
    public function iRemoveWallEntries()
    {
        return $this->getSession()->evaluateScript("$('.deletepost i').click();");
    }

    /**
     * @When /^I confirm remove wall entries$/
     */
    public function iConfirmRemoveWallEntries()
    {
        return $this->getSession()->evaluateScript("$('button[data-bb-handler=\"confirm\"]').click();");
    }
}
