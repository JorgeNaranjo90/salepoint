<?php
$I = new FunctionalTester($scenario);
$I->wantTo('create a currency without data');
$I->am('a Administrator user');


$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$I->amOnPage('/settings/currency');
//And
$I->see('Create');
$I->click('Create');
//Then
$I->seeCurrentUrlEquals('/settings/currency/create');
//When
$form = [
    'name' => '',
    'symbol' => '',
];
//And
$I->submitForm('//form', $form, 'Create');
//Then
$I->seeFormErrorMessage('name','The name field is required.');

//
