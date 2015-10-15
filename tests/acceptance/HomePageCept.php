<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify the Philippines text');
$I->amOnPage('/');
$I->see('&copy; 2015 P&amp;G. ALL RIGHTS RESERVED.');
?>
