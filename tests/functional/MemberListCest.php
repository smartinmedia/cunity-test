<?php

/**
 * Class SmokeCest
 */
class MemberListCest
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
    public function seeMemberList(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the memberlist');
        TestCommons::authentificate($I, 'owner');
        $I->click(['link' => 'Memberlist']);
        $I->see('Memberlist');
    }
}
