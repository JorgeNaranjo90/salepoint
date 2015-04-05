<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('create a new partner');
$I->am('a Administrator user');

/*This tree code lines van drawer for application login */
$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$I->amOnPage('/partners');
//And
$I->click('Create');
//Then
$I->seeCurrentUrlEquals('/partners/create');

//when
$form = [
    'name' => 'Mario',
    'country_id' => 1,
    'state_id' => 1,
    'city_id' => 1,
];

//And
$I->submitForm('//form', $form, 'Save');

$I->seeCurrentUrlEquals('/partners');
