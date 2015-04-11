<?php
$I = new FunctionalTester($scenario);
$I->wantTo('create a new certificate sats');
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
    'startDate'=>'2014-04-04',
    'endDate'=> '2014-04-06'
];
//And
$I->submitForm('//form', $form, 'Save');
//Then
$I->seeCurrentUrlEquals('tauro.com/settings/certificatesats');



