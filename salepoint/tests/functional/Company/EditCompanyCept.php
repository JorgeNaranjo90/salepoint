<?php
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Update Company Mau');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$id = $I->haveRecord('companys', [
    'name' => 'Maur',
    'partner_id' => '2',
    'currency_id' => '3',
    'fiscalRegimen_id' => '2']);
//And
$I->amOnPage('/settings/company/'.$id);
//then
$I->see('Edit');

//When
$I->click('Edit');
$I->seeCurrentUrlEquals('/settings/company/'.$id.'/edit');
$I->seeInField('name','Maur');
$I->seeInField('partner_id','2');
$I->seeInField('currency_id','3');
$I->seeInField('fiscalRegimen_id','2');

//And
$I->amGoingTo('Change name of Maur to Association_Mau');
$form = [
    'name' => 'Association_Mau',
    'partner_id' => '3',
    'currency_id' => '2',
    'fiscalRegimen_id' => '1'
];
//$I->submitForm('//form', $form, 'Save');


/*$I->amOnPage('/settings/users/'.$id);
$I->seeCurrentUrlEquals('/settings/users/'.$id);
$I->see('Macrio');
$I->see('mario@test.com');*/







