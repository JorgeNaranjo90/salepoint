<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Update user Mario');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$id = $I->haveRecord('users', [
    'name' => 'Mario',
    'email' => 'mario@test.com']);

//And
$I->amOnPage('/settings/users/'.$id);
//then
$I->see('Edit');


//When
$I->click('Edit');
$I->seeCurrentUrlEquals('/settings/users/'.$id.'/edit');
$I->seeInField('name','Mario');
$I->seeInField('email','mario@test.com');

//And
$I->amGoingTo('Change name of Mario to Macrio');
$form = [
    'name' => 'Macrio',
    'email' => 'mario@test.com',
];
//$I->submitForm('//form', $form, 'Save');


/*$I->amOnPage('/settings/users/'.$id);
$I->seeCurrentUrlEquals('/settings/users/'.$id);
$I->see('Macrio');
$I->see('mario@test.com');*/







