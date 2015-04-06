<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Update Currency Mau');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$id = $I->haveRecord('currencys', [
    'name' => 'Mau',
    'symbol' => '@']);

//And
$I->amOnPage('/settings/currency/'.$id);
//then
$I->see('Edit');


//When
$I->click('Edit');
$I->seeCurrentUrlEquals('/settings/currency/'.$id.'/edit');
$I->seeInField('name','Mau');
$I->seeInField('symbol','@');

//And
$I->amGoingTo('Change name of Mau to Yen');
$form = [
    'name' => 'Yen',
    'symbol' => '@',
];
//$I->submitForm('//form', $form, 'Save');


/*$I->amOnPage('/settings/users/'.$id);
$I->seeCurrentUrlEquals('/settings/users/'.$id);
$I->see('Macrio');
$I->see('mario@test.com');*/







