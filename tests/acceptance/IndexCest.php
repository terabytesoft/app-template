<?php

namespace TemplateAppBasic;

use TemplateAppBasic\AcceptanceTester;
use yii\helpers\Yii;

class IndexCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function indexPageTest(AcceptanceTester $I)
    {
        $I->wantTo('ensure that index page works.');
        $I->see(Yii::t('AppBasic', 'Congratulations'), 'h1');
    }
}
