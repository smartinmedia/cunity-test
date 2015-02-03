<?php

/**
 * Class SmokeCest
 */
class LoginCest
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
    public function loginWithWrongData(FunctionalTester $I)
    {
        $I->wantToTest('if I get an error message when I login with incorrect data');
        TestCommons::authentificate($I, 'incorrect');
        $I->see('Sorry');
        $I->see('The entered data is not correct!');
        $I->see('I forgot my password');
    }

    /**
     * @param FunctionalTester $I
     */
    public function loginWithCorrectData(FunctionalTester $I)
    {
        $I->wantToTest('if I can login with correct data');
        TestCommons::authentificate($I, 'owner');
        $I->see('( aaaaa )');
        $I->see('Edit profile');
        $I->see('Administration');
        $I->dontSee('The entered data is not correct!');
    }
}
