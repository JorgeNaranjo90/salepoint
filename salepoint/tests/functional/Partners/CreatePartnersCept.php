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
    'birthdate'=>'1993-03-21',
    'city_id'=>'1',
    'country_id'=>'1',
    'customer'=>'1',
    'email'=>'loedf@rff.com',
    'fax'=>'30034343',
    'name' => 'Mario',
    'last_name' => 'Muñoz',
    'locality' => 'Town',
    'mobile' =>'34343',
    'noExt' => '3433',
    'noInt' => '3434',
    'phone' => '343443433',
    'rfc' => 'Tess Roberts',
    'state_id' => '1',
    'supplier'=>'0'
];

//And
$I->submitForm('//form', $form, 'Save');

$I->seeCurrentUrlEquals('/partners');
