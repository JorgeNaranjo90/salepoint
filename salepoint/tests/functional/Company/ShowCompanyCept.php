<?php 
$I = new FunctionalTester($scenario);
$I->am('a Administrator see Currency');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();
//When
$id = $I->haveRecord('companys', [
    'name' => 'Maur',
    'partner_id' => '3',
    'currency_id' => '2',
    'fiscalRegimen_id' => '1']);
//And
$I->amOnPage('/settings/company/'.$id);
$I->see('Maur');
$I->see('3');
$I->see('2');
$I->see('1');


