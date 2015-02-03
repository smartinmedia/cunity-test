<?php

/**
 * Class SmokeAnonymCest
 */
class SmokeAnonymCest
{
    /**
     * @param FunctionalTester $I
     */
    public function _before(FunctionalTester $I)
    {
    }

    /**
     * @param FunctionalTester $I
     */
    public function _after(FunctionalTester $I)
    {
    }

    /**
     * @param FunctionalTester $I
     */
    public function seeStartpageAsAnonymousUser(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the start page as anonymous user');
        $I->amOnPage('/');
        $I->see('Welcome!');
        $I->see('This is the design for the new Cunity! :)');
        $I->see('Test-Login: tester@cunity.net with password: cunityisgreat');
        $I->see('I forgot my password');
        $I->see('Remember Me');
        $I->see('Register');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seeLegalNotice(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the legal notice as anonymous user');
        $I->amOnPage('/');
        $I->click(['link' => 'Legal-Notice']);
        $I->see('Imprint');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seeTermsAndConditions(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the terms and conditions as anonymous user');
        $I->amOnPage('/');
        $I->click(['link' => 'Terms and Conditions']);
        $I->see('Terms & Conditions');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seePrivacyPolicy(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the privacy policy as anonymous user');
        $I->amOnPage('/');
        $I->click(['link' => 'Privacy']);
        $I->see('Privacy Policy');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seeContact(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the contact form as anonymous user');
        $I->amOnPage('/');
        $I->click(['link' => 'Contact']);
        $I->see('ContactForm');
    }
}
