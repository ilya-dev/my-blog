<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

class FeatureContext extends BehatContext {

    /**
     * @Given /^I am on the page "([^"]*)"$/
     */
    public function iAmOnThePage($text)
    {
        // throw new PendingException();
    }

    /**
     * @Then /^I should see: "([^"]*)"$/
     */
    public function iShouldSee($text)
    {
        //throw new PendingException();
        return true;
    }

}

