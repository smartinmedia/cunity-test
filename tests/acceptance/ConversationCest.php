<?php

/**
 * Class ConversationCest
 */
class ConversationCest
{
    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
    {
        TestCommons::authentificate($I, 'owner');
    }

    /**
     * @param AcceptanceTester $I
     */
    public function _after(AcceptanceTester $I)
    {
    }

    /**
     * @param AcceptanceTester $I
     */
    public function startAConversation(AcceptanceTester $I)
    {
        $I->wantToTest('if I can start a conversation');
        $I->amOnPage('/messages');
        $I->click('#startConversation');
        $I->see('Send a message');
    }
}
