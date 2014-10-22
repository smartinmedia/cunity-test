<?php

use Behat\Behat\Context\Step\Given;
use Behat\Behat\Context\Step\When;
use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Class NavigateContext
 */
class NavigateContext extends RawMinkContext
{
    /**
     * @Given /^I am on wall$/
     */
    public function iAmOnWall()
    {
        return [
            new Given('I am on "/"'),
            new When('I follow "Wall"')
        ];
    }

    /**
     * @Given /^I click on "([^"]*)"$/
     * @param $text
     * @throws \Behat\Mink\Exception\ElementException
     */
    public function iClickOn($text)
    {
        $session = $this->getSession();
        $element = $session->getPage()->find(
            'xpath',
            $session->getSelectorsHandler()->selectorToXpath('xpath', '*//*[text()="' . $text . '"]')
        );
        if (null === $element) {
            throw new \InvalidArgumentException(sprintf('Cannot find text: "%s"', $text));
        }

        $element->click();
    }

    /**
     * @Given /^I click in "([^"]*)"$/
     * @param $fieldname
     * @throws \Behat\Mink\Exception\ElementException
     */
    public function iClickIn($fieldname)
    {
        $session = $this->getSession();
        $element = $session->getPage()->find('xpath', '//*[@name="' . $fieldname . '"]');


        if (null === $element) {
            throw new \InvalidArgumentException(sprintf('Cannot find name: "%s"', $fieldname));
        }

        $element->click();
    }

    /**
     * @Given /^I click id "([^"]*)"$/
     * @param $field
     * @return string
     */
    public function iClickId($field)
    {
        return (
        $this->getSession()->evaluateScript("$('#" . $field . "').click();")
        );
    }

    /**
     * @Given /^I click class "([^"]*)"$/
     * @param $field
     * @return string
     */
    public function iClickClass($field)
    {
        return (
        $this->getSession()->evaluateScript("$('." . $field . "').click();")
        );
    }

    /**
     * @Given /^I scroll "([^"]*)" to bottom$/
     * @param $field
     * @return string
     */
    public function iScrollToBottom($field)
    {
        return (
        $this->getSession()->evaluateScript("$('." . $field . "').scrollTop($('." . $field . "')[0].scrollHeight);")
        );
    }
}
