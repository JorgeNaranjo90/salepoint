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


//when
$form = [
    'name' => 'Mario',
    'email' => 'mario@test.com',
];

//And
$I->submitForm('//form', $form, 'Save');
//Then
$I->seeFormErrorMessage('password', 'The Password field is required.');

//When
$form = [
    'name' => 'Mario',
    'email' => 'mario@test.com',
    'password'=>'123456',
    'password_confirmation' => '123456'
];
//and
$I->submitForm('//form', $form, 'Save');
//then
$I->seeCurrentUrlEquals('/settings/users');
$I->see('Mario');
$I->seeRecord('users', [
    'name' => 'Mario',
    'email' => 'mario@test.com']);
