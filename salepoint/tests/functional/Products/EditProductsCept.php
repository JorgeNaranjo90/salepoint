<?php
$I = new FunctionalTester($scenario);
$I->wantTo('I am Admin and Update product Fresca');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

//When
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
$I->see('Edit');


//When
$I->click('Edit');
$I->seeCurrentUrlEquals('/products/'.$id.'/edit');
$I->seeInField('name','Fresca');
$I->seeInField('description','Fresca de 600 ml');
$I->seeInField('purchasePrice',7);
$I->seeInField('salePrice',9);
$I->seeInField('qtyAvailable',20);
$I->seeInField('incomingQty',12);
$I->seeInField('virtualAvailable',32);
$I->seeInField('ean13','Fresca Coca-cola company');
$I->seeInField('uom_id',4);

//And
$I->amGoingTo('Change name and description of Fresca to Fanta');
$form = [
    'name' => 'Fanta',
    'description' => 'Fanta de 600 ml',
    'purchasePrice' => 7,
    'salePrice' => 9,
    'qtyAvailable' => 20,
    'incomingQty' => 12,
    'virtualAvailable' => 32,
    'ean13' => 'Fresca Coca-cola company',
    'uom_id' => 4
];
$I->submitForm('//form', $form, 'Save');