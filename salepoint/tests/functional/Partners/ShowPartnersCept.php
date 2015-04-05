<?php
$I = new FunctionalTester($scenario);
$I->am('a Administrator see Partners');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

$id = $I->haveRecord('partners', [
    'name' => 'Mario',
    'country_id' => 1,
    'state_id' => 1,
    'city_id' => 1]);

$I->amOnPage('/partners/'.$id);
$I->see('Mario');