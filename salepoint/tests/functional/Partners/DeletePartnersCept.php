<?php
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Delete a new partner');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();


$I->amOnPage('/partners/create');
//when
$form = [
    'name' => 'Mario',
    'country_id' => 1,
    'state_id' => 1,
    'city_id' => 1
];
//And
$id = $I->haveRecord('partners', [
    'name' => 'Mario',
    'country_id' => 1,
    'state_id' => 1,
    'city_id' => 1]);


//And
$I->amOnPage('/partners/'.$id);
//then
$I->see('Delete');

//When
$I->submitForm('//form', ['id'=>$id], 'Delete');
$I->seeCurrentUrlEquals('/partners');
$I->see('was deleted !');
