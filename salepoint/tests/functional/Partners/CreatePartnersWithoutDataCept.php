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
    'birthdate'=>'',
    'city_id'=>'',
    'country_id'=>'',
    'customer'=>'',
    'email'=>'',
    'fax'=>'',
    'name' => '',
    'last_name' => '',
    'locality' => '',
    'mobile' =>'',
    'noExt' => '',
    'noInt' => '',
    'phone' => '',
    'rfc' => ' ',
    'state_id' => '',
    'supplier'=>''
];

//And
$I->submitForm('//form', $form, 'Save');

$I->seeFormErrorMessage('name','The name field is required.');

//$I->seeCurrentUrlEquals('/partners');
