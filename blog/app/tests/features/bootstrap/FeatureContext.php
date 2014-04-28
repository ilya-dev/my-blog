<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;

use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkDictionary;

class FeatureContext extends BehatContext {

    use MinkDictionary;

    /**
     * @Given /^I am logged in$/
     */
    public function iAmLoggedIn()
    {
        $this->visit('login');

        $this->fillField('email', 'foo@bar.com');

        $this->fillField('password', 'password');

        $this->pressButton('Get in!');
    }

}

