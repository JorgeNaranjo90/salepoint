<?php 
$I = new FunctionalTester($scenario);
$I->am('a Administrator see Users');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

$id = $I->haveRecord('certificatesats', [
    'name' => 'Benny',
    'noSerie' => '123456',
    'startDate'=>'0000-00-00',
    'endDate'=> '0000-00-00']);

$I->amOnPage('/settings/certificatesats/'.$id);
$I->see('Benny');
$I->see('123456');
$I->see('0000-00-00');
$I->see('0000-00-00');

