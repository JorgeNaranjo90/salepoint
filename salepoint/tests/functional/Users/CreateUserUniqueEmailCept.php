<?php 
$I = new FunctionalTester($scenario);
$I->am('a Administrator user');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$I->amOnPage('/settings/users');
//And
$I->click('Create');
//Then
$I->seeCurrentUrlEquals('/settings/users/create');

//When
$form = [
    'name' => 'Mario',
    'email' => 'admin@admin.com',
    'password'=>'123456',
    'password_confirmation' => '123456'
];
//and
$I->submitForm('//form', $form, 'Save');
//then

$I->seeFormErrorMessage('email', 'The E-Mail Address has already been taken.');


