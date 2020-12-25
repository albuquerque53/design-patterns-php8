<?php

/**
 *  ADAPTER:
 *  Gonna re-write the getBooks method from
 *  Library class, in this case the adapter
 *  will convert the array of books to a json (string)
 *  so that the code will not break (as breaks in
 *  Library class)
 */

require_once __DIR__ . '/Library.php';
require_once __DIR__ . '/BooksApi.php';

class MyLibrary extends Library
{
    /** 
     * PHP 8 Feature: 
     * Constructor Property Promotion 
     * RFC: https://wiki.php.net/rfc/constructor_promotion
     */
    public function __construct(private ?\BooksApi $api)
    {
        //
    }

    public function getBooks(): string
    {
        $books = $this->api->index();
        $jsonBooks = json_encode($books);

        return $jsonBooks;
    }
}
