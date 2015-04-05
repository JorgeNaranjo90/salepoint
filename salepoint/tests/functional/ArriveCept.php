<?php 
$I = new FunctionalTester($scenario);
$I->am('a Laravel Developer');
$I->wantTo('Know if Laravel was installed successfully');

$I->amOnPage('/');
$I->see('www.abarrotestauro.com');
