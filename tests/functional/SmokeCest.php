<?php

/**
 * Class SmokeCest
 */
class SmokeCest
{
    /**
     * @param FunctionalTester $I
     */
    public function _before(FunctionalTester $I)
    {
        TestCommons::authentificate($I, 'owner');
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
        $I->wantToTest('if I can see conversations');
        TestCommons::authentificate($I, 'owner');
        $I->click('#main-menu-item-messages');
        $I->see('Conversations');
        $I->see('Start Conversation');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seeGalleries(FunctionalTester $I)
    {
        $I->wantToTest('if I can see galleries');
        TestCommons::authentificate($I, 'owner');
        $I->click(['link' => 'Gallery']);
        $I->see('Gallery Albums');
        $I->see('New Album');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seeProfileEditForm(FunctionalTester $I)
    {
        $I->wantToTest('if I see the profile edit form');
        $I->click('#profile-menu-edit');
        $I->see('General');
        $I->see('Change password');
        $I->see('Delete Account');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seeNewsfeed(FunctionalTester $I)
    {
        $I->wantToTest('if I see the newsfeed');
        $I->click('#main-menu-item-newsfeed');
        $I->see('Newsfeed');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seeFriendList(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the friendlist');
        $I->click('#main-menu-item-friends');
        $I->see('My Friends');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seeForum(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the forum');
        $I->click('#main-menu-item-forums');
        $I->see('Forums');
    }

    /**
     * @param FunctionalTester $I
     */
    public function seeAdministration(FunctionalTester $I)
    {
        $I->wantToTest('if I can see the administration login');
        $I->click('#main-menu-item-administration');
        $I->see('Please confirm your login to enter the admin-panel!');
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
