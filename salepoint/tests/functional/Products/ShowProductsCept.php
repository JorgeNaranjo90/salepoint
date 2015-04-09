<?php
$I = new FunctionalTester($scenario);
$I->am('a Administrator see Product');

$I->dontSeeAuthentication();
$I->amLoggedAs(['email' => 'admin@admin.com', 'password' => 'admin']);
$I->seeAuthentication();

$id = $I->haveRecord('products', [
    'name' => 'Fresca',
    'description' => 'Fresca de 600 ml',
    'purchasePrice' => 7,
    'salePrice' => 9,
    'qtyAvailable' => 20,
    'incomingQty' => 12,
    'virtualAvailable' => 32,
    'ean13' => 'Fresca Coca-cola company',
    'uom_id' => 4,
    'partner_id' => 2]);

$I->amOnPage('/products/'.$id);
$I->see('Fresca');
$I->see('Fresca de 600 ml');