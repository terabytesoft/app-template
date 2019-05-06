<?php

use yii\helpers\Yii;

class IndexCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage('/');
    }

    public function indexPageTest(AcceptanceTester $I)
    {
        $I->wantTo('ensure that index page works.');
		$I->see(Yii::t('basic', 'Congratulations'), 'h1');
    }
}
