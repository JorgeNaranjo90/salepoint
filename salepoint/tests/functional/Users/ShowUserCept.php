<?php 
$I = new FunctionalTester($scenario);
$I->am('a Administrator see Users');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

$id = $I->haveRecord('users', [
    'name' => 'Mario',
    'email' => 'mario@test.com']);

$I->amOnPage('/settings/users/'.$id);
$I->see('Mario');
$I->see('mario@test.com');

