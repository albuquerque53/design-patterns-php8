<?php

require_once __DIR__ . '/MyLibrary.php';
require_once __DIR__ . '/BooksApi.php';

$api = new BooksApi;
$myLib = new MyLibrary($api);

$books = $myLib->getBooks();
echo $books;
