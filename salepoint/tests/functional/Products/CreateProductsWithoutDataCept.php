<?php
$I = new FunctionalTester($scenario);
$I->wantTo('create a new product without data');
$I->am('a Administrator user');

/*This tree code lines van drawer for application login */
$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
$I->amOnPage('/products');
//And
$I->click('Create');
//Then
$I->seeCurrentUrlEquals('/products/create');

//when
$form = [
    'name' => '',
    'ean13' => '',
    'uom_id' => null,
    'partner_id' => null
];

//And
$I->submitForm('//form', $form, 'Save');

$I->seeFormErrorMessage('name','The name field is required.');
$I->seeFormErrorMessage('ean13','The ean13 field is required.');
