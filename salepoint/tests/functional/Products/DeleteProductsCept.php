<?php
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Delete a product');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();


$I->amOnPage('/products/create');
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
$id = $I->haveRecord('products', [
    'name' => 'Fresca',
    'description' => 'Fresca de 600 ml',
    'purchasePrice' => 7,
    'salePrice' => 9,
    'qtyAvailable' => 20,
    'incomingQty' => 12,
    'virtualAvailable' => 32,
    'ean13' => 'Fresca Coca-cola company',
    'uom_id' => 4]);


//And
$I->amOnPage('/products/'.$id);
//then
$I->see('Delete');

//When
$I->submitForm('//form', ['id'=>$id], 'Delete');
$I->seeCurrentUrlEquals('/products');
$I->see('was delete !');