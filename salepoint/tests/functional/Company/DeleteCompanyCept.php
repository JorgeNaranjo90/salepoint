<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Delete a new company');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();


$I->amOnPage('/settings/company/create');
//when
$form = [
    'name' => 'Maur',
    'partner_id' => 'Ramon Pouros',
    'currency_id' => 'ALL',
    'fiscalRegimen_id' => 'Asociaciones Religiosas'
];
//And
$id = $I->haveRecord('companys', [
    'name' => 'Maur',
    'partner_id' => '3',
    'currency_id' => '2',
    'fiscalRegimen_id' => '1']);

//And
$I->amOnPage('/settings/company/'.$id);
//then
$I->see('Delete');
//When
$I->submitForm('//form', ['id'=>$id], 'Delete');
$I->seeCurrentUrlEquals('/settings/company');











