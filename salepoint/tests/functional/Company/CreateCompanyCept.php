<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('create a company');
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
    'name' => 'Mau',
    'partner_id' => 'Ramon Pouros',
    'currency_id' => 'ALL',
    'fiscalRegimen_id' => 'Asociaciones Religiosas',
];
//And
$I->submitForm('//form', $form, 'Save');
//Then
$I->seeCurrentUrlEquals('/settings/company');