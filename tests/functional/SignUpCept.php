<?php
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('Sign up for a Larabook account');

$I->amOnPage('/');
$I->click('Sign Up!');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username', 'JohnDoe');
$I->fillField('Email', 'john@example.com');
$I->fillField('Password', 'passwordDemo');
$I->fillField('Password Confirmation', 'passwordDemo');
$I->click('Sign Up');

$I->seeCurrentUrlEquals();
$I->see('Welcome to Larabook');
