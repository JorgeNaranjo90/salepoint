<?php
$I = new FunctionalTester($scenario);
$I->wantTo('create a new product');
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
    'name' => 'Fresca',
    'description' => 'Fresca de 600 ml',
    'purchasePrice' => 7,
    'salePrice' => 9,
    'qtyAvailable' => 20,
    'incomingQty' => 12,
    'virtualAvailable' => 32,
    'ean13' => 'Fresca Coca-cola company',
    'uom_id' => 4
];

//And
$I->submitForm('//form', $form, 'Save');

$I->seeCurrentUrlEquals('/products');
