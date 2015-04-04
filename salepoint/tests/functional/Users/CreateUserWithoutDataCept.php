<?php
$I = new FunctionalTester($scenario);
$I->am('a Administrator user');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$I->amOnPage('/settings/users');
//And
$I->click(' Create');
//Then
$I->seeCurrentUrlEquals('/settings/users/create');

//when

//And
$I->click('Save');

$I->seeFormErrorMessage('name', 'The name field is required.');
$I->seeFormErrorMessage('email', 'The E-Mail Address field is required.');
$I->seeFormErrorMessage('password', 'The Password field is required.');
