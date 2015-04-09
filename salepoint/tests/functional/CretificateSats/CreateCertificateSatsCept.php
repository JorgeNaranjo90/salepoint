<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('create a certificate sats');
$I->am('a Administrator user');


$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$I->amOnPage('/settings/certificatesats');
//And
$I->see('Create');
$I->click('Create');
//Then
$I->seeCurrentUrlEquals('/settings/certificatesats/create');

//When
$form = [
    'name' => 'Benny',
    'noSerie' => '123456',
    'startDate'=>'0000-00-00',
    'endDate'=> '0000-00-00'
];
//And
$I->submitForm('//form', $form, 'Create');
//Then
$I->seeCurrentUrlEquals('/settings/certificatesats');
