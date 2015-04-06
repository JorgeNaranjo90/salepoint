<?php 
$I = new FunctionalTester($scenario);
$I->am('a Administrator see Currency');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();
//When
$id = $I->haveRecord('currencys', [
    'name' => 'Mau',
    'symbol' => '@']);
//And
$I->amOnPage('/settings/currency/'.$id);
$I->see('Mau');
$I->see('@');

