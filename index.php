<?php
require_once 'vendor/autoload.php';

// $driver = new \Behat\Mink\Driver\GoutteDriver();
$driver = new \Behat\Mink\Driver\Selenium2Driver('safari');

$session = new \Behat\Mink\Session($driver);

// start the session
$session->start();

$session->visit('http://www.baidu.com');
$page = $session->getPage();
$button = $page->find('css', '.s_btn');
echo $button->getValue();

$session->stop();