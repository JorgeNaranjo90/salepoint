<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Delete a new user');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();


$I->amOnPage('/settings/users/create');
//when
$form = [
    'name' => 'Jorge',
    'email' => 'jorge@test.com',
    'password'=>'123456',
    'password_confirmation' => '123456'

];
//And
$id = $I->haveRecord('users', [
    'name' => 'Jorge',
    'email' => 'jorge@test.com']);


//And
$I->amOnPage('/settings/users/'.$id);
//then
$I->see('Delete');

//When
$I->submitForm('//form', ['id'=>$id], 'Delete');
$I->seeCurrentUrlEquals('/settings/users');
$I->see('was delete');


