<?php
use Mvz\Bundle\LibraryBundle\Helper\Datatype\String;
use Mvz\Bundle\LibraryBundle\Helper\Filesystem\File;

/**
 * Class TestCommons
 */
class TestCommons
{
    /**
     * @var array
     */
    protected static $USERS = [
        'incorrect' => [
            'username' => 'aghfudhg@suklgh.de',
            'password' => 'jdfhgdfjkjdklg'
        ],
        'owner' => [
            'username' => 'aaaaa@asdf.de',
            'password' => '123456789'
        ]
    ];

    /**
     * @param $I
     */
    public static function waitForAjax($I)
    {
        $I->waitForJS("return $.active == 0;", 60);
    }

    /**
     * @param $I
     * @param $role
     */
    public static function authentificate($I, $role)
    {
        self::logout($I);
        $I->amOnPage('/');
        $I->fillField('#loginemail', self::$USERS[$role]['username']);
        $I->fillField('password', self::$USERS[$role]['password']);
        $I->click('Log in');
    }

    /**
     * @param $I
     */
    public static function logout($I)
    {
        $I->amOnPage('/register/logout');
    }

    /**
     * @param $I
     * @param $filename
     * @return bool
     */
    public function seeContentFromFile($I, $filename)
    {
        $file = new File(__DIR__ . '/../' . $filename);
        $content = $file->read(0, true);
        $content2 = explode('<br />', nl2br($this->getSession()->getDriver()->getContent()));

        for ($i = 0; $i < count($content); $i++) {
            if (String::trim($content[$i]) != String::trim($content2[$i])) {
                return false;
            }
        }
    }
}