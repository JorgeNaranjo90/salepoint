<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Delete a new currency');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();


$I->amOnPage('/settings/currency/create');
//when
$form = [
    'name' => 'Mau',
    'symbol' => '@',
];
//And
$id = $I->haveRecord('currencys', [
    'name' => 'Mau',
    'symbol' => '@']);

//And
$I->amOnPage('/settings/currency/'.$id);
//then
$I->see('Delete');
//When
$I->submitForm('//form', ['id'=>$id], 'Delete');
$I->seeCurrentUrlEquals('/settings/currency');





