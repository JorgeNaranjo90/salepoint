<?php
$I = new FunctionalTester($scenario);
$I->wantTo('create a company without data');
$I->am('a Administrator user');


$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$I->amOnPage('/settings/company');
//And
$I->see('Create');
$I->click('Create');
//Then
$I->seeCurrentUrlEquals('/settings/company/create');
//When
$form = [
    'name' => '',
];
//And
$I->submitForm('//form', $form, 'Create');
//Then
$I->seeFormErrorMessage('name','The name field is required.');

