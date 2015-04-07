<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Update CertificateSats Mau');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$id = $I->haveRecord('certificatesats', [
    'name' => 'Benny',
    'noSerie' => '123456',
    'startDate'=>'0000-00-00',
    'endDate'=> '0000-00-00']);

//And
$I->amOnPage('/settings/certificatesats/'.$id);
//then
$I->see('Edit');
//When
$I->click('Edit');
$I->seeCurrentUrlEquals('/settings/certificatesats/'.$id.'/edit');
$I->seeInField('name','Benny');
$I->seeInField('noSerie','123456');
$I->seeInField('startDate','0000-00-00');
$I->seeInField('endDate','0000-00-00');

//And
$I->amGoingTo('Change name of Benny to Iggy2');
$form = [
    'name' => 'Iggy2',
    'noSerie' => '1234567',
    'startDate' => '2010-02-01',
    'endDate' => '2019-04-01',
];







