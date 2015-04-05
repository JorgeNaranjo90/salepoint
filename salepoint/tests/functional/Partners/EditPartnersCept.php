<?php
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Update partner Mario');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$id = $I->haveRecord('partners', [
    'name' => 'Mario',
    'country_id' => 1,
    'state_id' => 1,
    'city_id' => 1]);

//And
$I->amOnPage('/partners/'.$id);
//then
$I->see('Edit');


//When
$I->click('Edit');
$I->seeCurrentUrlEquals('/partners/'.$id.'/edit');
$I->seeInField('name','Mario');
$I->seeInField('country_id',1);
$I->seeInField('state_id',1);
$I->seeInField('city_id',1);

//And
$I->amGoingTo('Change name of Mario to Mariano');
$form = [
    'name' => 'Mariano',
    'country_id' => 1,
    'state_id' => 1,
    'city_id' => 1
];
$I->submitForm('//form', $form, 'Save');

