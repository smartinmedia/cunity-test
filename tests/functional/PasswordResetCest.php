<?php

/**
 * Class SmokeCest
 */
class PasswordResetCest
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
    public function seePasswordResetLink(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the link to reset the password');
        TestCommons::logout($I);
        $I->see('I forgot my password');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seePasswordResetForm(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the form to reset the password');
        TestCommons::logout($I);
        $I->click(['link' => 'I forgot my password']);
        $I->see('If you forgot or lost your password, enter your email adress your have used for registration and we will send you a link to reset your password');
    }
}
