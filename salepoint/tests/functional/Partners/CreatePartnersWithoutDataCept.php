<?php
$I = new FunctionalTester($scenario);
$I->wantTo('create a new partner without data');
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
    'name' => '',
    'country_id' => null,
    'state_id' => null,
    'city_id' => null,
];

//And
$I->submitForm('//form', $form, 'Save');

$I->seeFormErrorMessage('name','The name field is required.');

//$I->seeCurrentUrlEquals('/partners');
