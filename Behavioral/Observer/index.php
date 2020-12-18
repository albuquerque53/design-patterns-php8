<?php

require_once __DIR__ . '/TechNewsletter.php';
require_once __DIR__ . '/InterestingDeveloper.php';
require_once __DIR__ . '/Curious.php';

$albuquerque = new InterestingDeveloper('Albuquerque');
$gabriel = new Curious('Gabriel');

$techNews = new TechNewsletter;

$techNews->attach($albuquerque);
$techNews->attach($gabriel);

$techNews->getNews();

$albuquerque->readNews();