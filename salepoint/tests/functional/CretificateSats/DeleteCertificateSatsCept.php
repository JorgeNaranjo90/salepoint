<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Delete a new certificatesats');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();


$I->amOnPage('/settings/certificatesats/create');
//when
$form = [
    'name' => 'Benny',
    'noSerie' => '123456',
    'startDate'=>'0000-00-00',
    'endDate'=> '0000-00-00'
];
//And
$id = $I->haveRecord('certificatesats', [
    'name' => 'Benny',
    'noSerie' => '123456',
    'startDate'=>'0000-00-00',
    'endDate'=> '0000-00-00']);


//And
$I->amOnPage('/settings/certificatesats/'.$id);
//then
$I->see('Delete');
//When
$I->submitForm('//form', ['id'=>$id], 'Delete');
$I->seeCurrentUrlEquals('/settings/certificatesats');
$I->see('was deleted !');


